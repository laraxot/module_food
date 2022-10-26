<?php

declare(strict_types=1);

namespace Modules\Food\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Modules\Blog\Models\Event;
use Modules\Blog\Models\Photo;
use Modules\Blog\Models\Profile as BaseProfile;
use Modules\Cart\Models\Cart;
use Modules\Food\Contracts\ShopContract;
use Modules\Geo\Models\Place;
use Modules\Rating\Models\Rating;

/**
 * Modules\Food\Models\Profile.
 *
 * @property int                                                                         $id
 * @property int|null                                                                    $status
 * @property string|null                                                                 $bio
 * @property \Illuminate\Support\Carbon|null                                             $created_at
 * @property \Illuminate\Support\Carbon|null                                             $updated_at
 * @property string|null                                                                 $created_by
 * @property string|null                                                                 $updated_by
 * @property string|null                                                                 $deleted_by
 * @property string|null                                                                 $firstname
 * @property string|null                                                                 $surname
 * @property string|null                                                                 $email
 * @property string|null                                                                 $phone
 * @property string|null                                                                 $address
 * @property int|null                                                                    $user_id
 * @property string|null                                                                 $locality
 * @property string|null                                                                 $locality_short
 * @property string|null                                                                 $administrative_area_level_3
 * @property string|null                                                                 $administrative_area_level_3_short
 * @property string|null                                                                 $administrative_area_level_2
 * @property string|null                                                                 $administrative_area_level_2_short
 * @property string|null                                                                 $administrative_area_level_1
 * @property string|null                                                                 $administrative_area_level_1_short
 * @property string|null                                                                 $country
 * @property string|null                                                                 $country_short
 * @property string|null                                                                 $street_number
 * @property string|null                                                                 $street_number_short
 * @property string|null                                                                 $route
 * @property string|null                                                                 $route_short
 * @property string|null                                                                 $postal_code
 * @property string|null                                                                 $postal_code_short
 * @property string|null                                                                 $premise
 * @property string|null                                                                 $premise_short
 * @property string|null                                                                 $googleplace_url
 * @property string|null                                                                 $googleplace_url_short
 * @property string|null                                                                 $point_of_interest
 * @property string|null                                                                 $point_of_interest_short
 * @property string|null                                                                 $political
 * @property string|null                                                                 $political_short
 * @property string|null                                                                 $campground
 * @property string|null                                                                 $campground_short
 * @property string|null                                                                 $postal_town
 * @property string|null                                                                 $postal_town_short
 * @property string|null                                                                 $post_type
 * @property string|null                                                                 $website
 * @property string|null                                                                 $formatted_address
 * @property string|null                                                                 $min_order
 * @property string|null                                                                 $delivery_cost
 * @property string|null                                                                 $delivery_options
 * @property int|null                                                                    $order_action
 * @property string|null                                                                 $price_currency
 * @property string|null                                                                 $price_range
 * @property string|null                                                                 $latitude
 * @property string|null                                                                 $longitude
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Article[]     $articles
 * @property int|null                                                                    $articles_count
 * @property \Modules\Food\Models\BellBoy|null                                           $bellBoy
 * @property \Illuminate\Database\Eloquent\Collection|Cart[]                             $bellBoyCarts
 * @property int|null                                                                    $bell_boy_carts_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\BellBoy[]     $bellBoys
 * @property int|null                                                                    $bell_boys_count
 * @property \Illuminate\Database\Eloquent\Collection|Cart[]                             $carts
 * @property int|null                                                                    $carts_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]       $containerWidgets
 * @property int|null                                                                    $container_widgets_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Cuisine[]     $cuisines
 * @property int|null                                                                    $cuisines_count
 * @property \Illuminate\Database\Eloquent\Collection|Event[]                            $events
 * @property int|null                                                                    $events_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[]    $favorites
 * @property int|null                                                                    $favorites_count
 * @property mixed                                                                       $first_name
 * @property mixed                                                                       $full_address
 * @property mixed                                                                       $full_name
 * @property mixed                                                                       $guid
 * @property mixed                                                                       $image_src
 * @property mixed                                                                       $lang
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Privacy[]     $privacies
 * @property mixed                                                                       $routename
 * @property mixed                                                                       $subtitle
 * @property mixed                                                                       $sur_name
 * @property mixed                                                                       $title
 * @property mixed                                                                       $txt
 * @property mixed                                                                       $url
 * @property mixed                                                                       $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Home[]        $homes
 * @property int|null                                                                    $homes_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]       $images
 * @property int|null                                                                    $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[]    $myFavorites
 * @property int|null                                                                    $my_favorites_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\OpeningHour[] $openingHours
 * @property int|null                                                                    $opening_hours_count
 * @property \Illuminate\Database\Eloquent\Collection|Photo[]                            $photos
 * @property int|null                                                                    $photos_count
 * @property \Illuminate\Database\Eloquent\Collection|Place[]                            $places
 * @property int|null                                                                    $places_count
 * @property \Modules\Lang\Models\Post|null                                              $post
 * @property int|null                                                                    $privacies_count
 * @property BaseProfile|null                                                            $profile
 * @property \Illuminate\Database\Eloquent\Collection|Rating[]                           $ratings
 * @property int|null                                                                    $ratings_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Cuisine[]     $recipes
 * @property int|null                                                                    $recipes_count
 * @property \Modules\Food\Models\RestaurantOwner|null                                   $restaurantOwner
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Restaurant[]  $restaurants
 * @property int|null                                                                    $restaurants_count
 * @property \Modules\LU\Models\User|null                                                $user
 * @property \Modules\Food\Models\Waiter|null                                            $waiter
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]       $widgets
 * @property int|null                                                                    $widgets_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereDeliveryCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereDeliveryOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereMinOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereOrderAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePriceCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       withDistance($lat, $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 *
 * @mixin \Eloquent
 *
 * @property string|null $deleted_ip
 * @property string|null $created_ip
 * @property string|null $updated_ip
 * @property string|null $deleted_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeletedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedIp($value)
 */
class Profile extends BaseProfile {
    /**
     * @var string
     */
    protected $connection = 'mysql';

    // --- relationships ---

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function restaurants() {
        return $this->morphRelated(Restaurant::class);
        // return $this->hasMany(Restaurant::class, 'created_by', 'created_by')
        //    ->orWhere('updated_by', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events() {
        // return  $this->morphRelated(Restaurant::class);
        return $this->hasMany(Event::class, 'created_by', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuisines() {
        // return  $this->morphRelated(Restaurant::class);
        return $this->hasMany(Cuisine::class, 'created_by', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipes() {
        // return  $this->morphRelated(Restaurant::class);
        return $this->hasMany(Cuisine::class, 'created_by', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function homes() {
        // return  $this->morphRelated(Restaurant::class);
        return $this->hasMany(Home::class, 'created_by', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function openingHours() {
        // return  $this->morphRelated(Restaurant::class);
        return $this->hasMany(OpeningHour::class, 'created_by', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos() {
        // return  $this->morphRelated(Restaurant::class);
        return $this->hasMany(Photo::class, 'created_by', 'created_by');
    }

    public function syncRestaurants(): void {
        $handle = $this->user->handle;
        $restaurants = Restaurant::query()
            ->where(
                function ($query) use ($handle): void {
                    $query->where('created_by', $handle)
                        ->orWhere('updated_by', $handle);
                }
            )->get();

        $rows = $this->restaurants;
        /* UNDER COSTRUCTION
        $filtered = $restaurants->filter(function ($value, $key) use ($rows) {
            return ! $rows->where('restaurants.id', $value->id)->exists();
        });
       */
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function places() {
        return $this->morphMany(Place::class, 'post');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurantOwner() {
        return $this->hasOne(RestaurantOwner::class, 'user_id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bellBoys() { // solo perche' obbligato al plurale
        // return $this->morphRelated(Restaurant::class);//->where('pivot.rule','bellboy');
        return $this->hasMany(BellBoy::class, 'user_id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bellBoy() {
        return $this->hasOne(BellBoy::class, 'user_id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function waiter() {
        return $this->hasOne(Waiter::class, 'user_id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carts() { // carrelli del "compratore"
        return $this->hasMany(Cart::class, 'user_id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bellBoyCarts() { // carrello del "fattorino assegnato"
        return $this->hasMany(Cart::class, 'bell_boy_id', 'user_id');
    }

    // /--- funzioni tampone

    /**
     * @return bool
     */
    public function isBellBoy() {
        // $bell_boys_count = $this->bellBoys->count();
        // return $bell_boys_count > 0;
        $role = $this->bellBoy;

        return is_object($role);
    }

    /**
     * @return bool
     */
    public function isWaiter() {
        $waiter = $this->waiter;

        return is_object($waiter);
    }

    public function isBellBoyOfThisRestaurant(ShopContract $restaurant): bool {
        if (! is_object($restaurant)) {
            return false;
        }
        $restaurant_bell_boys = $restaurant->bellBoys;
        $bell_boy = $this->bellBoys->first();

        $check = false;
        foreach ($restaurant_bell_boys as $ristobb) {
            if ($ristobb->is($bell_boy)) {
                $check = true;
            }
        }
        // collect($restaurant_bell_boys->toArray())->search($bell_boy->toArray()),
        /*
        dddx([
            'restaurant_bellboys'=>$restaurant_bell_boys,
            'bellboy'=>$bell_boy,
            'check'=>$check,

        ]);//*/
        return $check;
    }

    // ------------------------- mutators -----------------------------------
    public function getPhoneAttribute(?string $value): string {
        if ($value) {
            return $value;
        } else {
            return 'ND';
        }
    }

    /*
     * Get the order tax.
     */
    /*
    protected function username(): Attribute
    {
        return new Attribute(
            get: fn ($value) => 'paperino', // accessor
            set: fn ($value) => 'paperino', // mutator
        );
    }
    */

    /**
     * Undocumented function.
     */
    protected function username(): Attribute {
        return new Attribute(
            function ($value) {
                return 'paperino'; // raw tax
            },
            function ($value) {
                return 'paperino'; // computed tax
            }
        );
    }

    /**
     * Undocumented function.
     */
    protected function name(): Attribute {
        return new Attribute(
            function ($value) {
                return 'paperino'; // raw tax
            },
            function ($value) {
                return 'paperino'; // computed tax
            }
        );
    }
}
