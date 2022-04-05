<?php

declare(strict_types=1);

namespace Modules\Food\Models\Traits;

use Illuminate\Support\Facades\Auth;
//---- Blog Models -----
use Illuminate\Support\Str;
use Modules\Blog\Models\Article;
use Modules\Blog\Models\Comment;
use Modules\Blog\Models\Contact;
use Modules\Blog\Models\Event;
//-- Cart models
use Modules\Blog\Models\Photo;
//--- Food models
use Modules\Cart\Models\Booking;
use Modules\Cart\Models\BookingItem;
use Modules\Cart\Models\Cart;
use Modules\Food\Models\BellBoy;
use Modules\Food\Models\Cuisine;
use Modules\Food\Models\CuisineCat;
use Modules\Food\Models\IngredientCat;
use Modules\Food\Models\Location;
use Modules\Food\Models\OpeningHour;
use Modules\Food\Models\Profile;
use Modules\Food\Models\RestaurantMorph;
use Modules\Food\Models\RestaurantOwner;
use Modules\Food\Models\RestaurantProvider;
use Modules\Food\Models\Tip;
//use Modules\Food\Models\Table;
use Modules\Food\Models\Waiter;
use Modules\Lang\Models\Post; //--- potrebbe essere in un shop qualsiasi..

/**
 * Trait RestaurantRelationshipsTrait.
 */
trait RestaurantRelationshipsTrait {
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    /*
    public function providers() {
        return $this->hasMany(RestaurantProvider::class, 'post_id', 'post_id');
    }
    */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restaurantProviders() {
        return $this->hasMany(RestaurantProvider::class, 'restaurant_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function profiles() {
        return $this->morphRelated(Profile::class, true); //true alla fine e' per dire inverse
    }

    /**
     * @param int $user_id
     *
     * @return bool
     */
    public function isBellBoyAuthID($user_id) {
        $bell_boy_count = $this->bellBoys()->wherePivot('user_id', $user_id)->count();

        return $bell_boy_count > 0;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function bellBoys() {
        return $this->morphRelated(BellBoy::class, true); //, 'user_id');
    }

    /**
     * @return \Staudenmeir\EloquentHasManyDeep\HasManyDeep
     */
    public function bellboys_hasmanydeep() {
        //return $this->morphRelated(Profile::class, true);
        $foreignKeys = ['related_id', 'post_id', 'user_id'];
        $localKeys = ['post_id', 'post_id', 'user_id'];

        return $this->hasManyDeep(BellBoy::class, [RestaurantMorph::class, Profile::class], $foreignKeys, $localKeys)
            ->withIntermediate(RestaurantMorph::class);
    }

    public function hasBellBoy(array $params): bool {
        extract($params);

        if (! isset($user_id)) {
            dddx(['err' => 'missing user_id']);

            return false;
        }

        $row = $this->bellBoys()->where('bell_boys.user_id', $user_id)->first();

        return is_object($row);
    }

    /*
    public function tables() {
        return $this->morphMany(Table::class, 'shop');
    }
    */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function carts() {
        return $this->morphMany(Cart::class, 'shop');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function cartsByRestaurantOwner() {
        return $this->carts()->where('user_id', null);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function cartsInProgress() {
        return $this->carts()
            ->where('status', '!=', 6)  //non visualizzo quelli conclusi
            ->where('status', '!=', 3) //non visualizzo quelli rifiutati
            ->orderby('status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function myCartWithThisRestaurant() { //sarebbe un mycarts
        //$rows = $this->hasMany(Cart::class, 'post_id', 'post_id')->where('post_type', $this->post_type) //polimorfica
        //                ->where('user_id', \Auth::id()) //nella parte "pubblica" mostro solo quelli dell'utente
        //                ;
        $rows = $this->morphOne(Cart::class, 'shop')
            ->where('user_id', Auth::id())
            //->where('status',)
        ;

        return $rows;
    }

    /*
    public function myTablesWithThisRestaurant() {
        $rows = $this->morphMany(Table::class, 'shop')
        ->where('user_id', \Auth::id())
        //->where('status',)
        ;

        return $rows;
    }
    */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function locations() { //da prototipo vuole il plurale
        $table = with(new Location())->getTable();
        $post_table = with(new Post())->getTable();
        $with = ['post'];
        $row = $this->hasOne(Location::class, 'locality', 'locality')
            ->join($post_table, $post_table.'.post_id', $table.'.post_id')
            ->where('lang', $this->lang)
            ->where('post_type', 'location')
            ->with($with)
            ->withDefault();

        return $row;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location() {
        if (null == $this->locality) {
            $this->locality = 'unknown';
            $this->save();
        }

        $row = $this->hasOne(Location::class, 'locality', 'locality');
        if (! $row->exists()) {
            $row = Location::query()->firstOrCreate(['locality' => $this->locality]);
            $post = $row->post()->firstOrCreate(
                [
                    'title' => $this->locality,
                    'guid' => Str::slug($this->locality),
                    'lang' => app()->getLocale(),
                ]
            );

            return $this->hasOne(Location::class, 'locality', 'locality');
        }

        return $row;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maps() { //--- da valutare --
        return $this->hasOne(Location::class, 'locality', 'locality')->withDefault();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function contacts() {
        return $this->morphMany(Contact::class, 'post'); //, 'post_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function openingHours() {
        return $this->morphMany(OpeningHour::class, 'post');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function articles() {
        return $this->morphRelated(Article::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function photos() {
        //$photo_class = config('xra.model.photo');

        //return $this->morphRelated($photo_class);
        return $this->morphRelated(Photo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function events() {
        return $this->morphRelated(Event::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function cuisineCats() {
        return $this->morphRelated(CuisineCat::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function cuisines() {
        $related = Cuisine::class;
        $related_table = with(new $related())->getTable();
        $with = ['post', 'recipes', 'ingredientCats', 'ingredientCats.ingredients'];

        return $this->morphRelated($related)
            ->with($with);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function productCats() {
        return $this->cuisines();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function ingredientCats() {
        $rows = $this->morphRelated(IngredientCat::class);

        return $rows;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments() {
        return $this->morphMany(Comment::class, 'post');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function restaurantOwners() {
        return $this->morphRelated(RestaurantOwner::class, true); //, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function waiters() {
        return $this->morphRelated(Waiter::class, true); //, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function tips() {
        //$tip_class = config('xra.model.tip');

        return $this->morphMany(Tip::class, 'post');
    }

    ///------------------------------------

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function bookingItems() {
        return $this->morphMany(BookingItem::class, 'shop');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function bookings() {
        return $this->morphMany(Booking::class, 'shop');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function myBookingsWithThisRestaurant() {
        $rows = $this->morphMany(Booking::class, 'shop')
        ->where('customer_id', Auth::id())
        //->where('status',)
        ;

        return $rows;
    }
}
