<<<<<<< HEAD
<?php

namespace Modules\Food\Models;

use Modules\Blog\Models\Home as BaseHomeModel;
use Modules\Xot\Models\Traits\WidgetTrait;

/**
 * Modules\Food\Models\Home.
 *
 * @property int                                                                        $id
 * @property string|null                                                                $created_by
 * @property string|null                                                                $updated_by
 * @property \Illuminate\Support\Carbon|null                                            $created_at
 * @property \Illuminate\Support\Carbon|null                                            $updated_at
 * @property string|null                                                                $icon_src
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Location[]   $cities
 * @property int|null                                                                   $cities_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]      $containerWidgets
 * @property int|null                                                                   $container_widgets_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[]   $favorites
 * @property int|null                                                                   $favorites_count
 * @property mixed                                                                      $guid
 * @property mixed                                                                      $image_src
 * @property mixed                                                                      $lang
 * @property mixed                                                                      $post_type
 * @property mixed                                                                      $routename
 * @property mixed                                                                      $subtitle
 * @property mixed                                                                      $title
 * @property mixed                                                                      $txt
 * @property mixed                                                                      $url
 * @property mixed                                                                      $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]      $images
 * @property int|null                                                                   $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[]   $myFavorites
 * @property int|null                                                                   $my_favorites_count
 * @property \Modules\Blog\Models\Post|null                                             $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Restaurant[] $restaurants
 * @property int|null                                                                   $restaurants_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]      $widgets
 * @property int|null                                                                   $widgets_count
 * @method static \Illuminate\Database\Eloquent\Builder|Home newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Home newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Home ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Home query()
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereIconSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Location[] $citiesPopular
 * @property-read int|null $cities_popular_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Restaurant[] $restaurantsPopular
 * @property-read int|null $restaurants_popular_count
 */
class Home extends BaseHomeModel {
    use WidgetTrait;

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'article_type', 'icon_src'];

    //--- relationships ----

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities() {
        return $this->hasMany(Location::class, 'lang', 'lang');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citiesPopular() {
        return $this->cities()
            ->where('restaurants_count', '!=', 0)
            ->inRandomOrder() // Call to an undefined method Illuminate\Database\Eloquent\Collection<Modules\Food\Models\Location>::inRandomOrder().
            ->limit(5);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restaurants() {
        return $this->hasMany(Restaurant::class, 'lang', 'lang');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restaurantsPopular() {
        return $this->restaurants()
            ->inRandomOrder() // Call to an undefined method Illuminate\Database\Eloquent\Collection<Modules\Food\Models\Location>::inRandomOrder().
            ->limit(12);
    }
}//end model
=======
<?php

namespace Modules\Food\Models;

use Modules\Blog\Models\Home as BaseHomeModel;
use Modules\Xot\Models\Traits\WidgetTrait;

/**
 * Modules\Food\Models\Home.
 *
 * @property int                                                                        $id
 * @property string|null                                                                $created_by
 * @property string|null                                                                $updated_by
 * @property \Illuminate\Support\Carbon|null                                            $created_at
 * @property \Illuminate\Support\Carbon|null                                            $updated_at
 * @property string|null                                                                $icon_src
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Location[]   $cities
 * @property int|null                                                                   $cities_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]      $containerWidgets
 * @property int|null                                                                   $container_widgets_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[]   $favorites
 * @property int|null                                                                   $favorites_count
 * @property mixed                                                                      $guid
 * @property mixed                                                                      $image_src
 * @property mixed                                                                      $lang
 * @property mixed                                                                      $post_type
 * @property mixed                                                                      $routename
 * @property mixed                                                                      $subtitle
 * @property mixed                                                                      $title
 * @property mixed                                                                      $txt
 * @property mixed                                                                      $url
 * @property mixed                                                                      $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]      $images
 * @property int|null                                                                   $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[]   $myFavorites
 * @property int|null                                                                   $my_favorites_count
 * @property \Modules\Blog\Models\Post|null                                             $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Restaurant[] $restaurants
 * @property int|null                                                                   $restaurants_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]      $widgets
 * @property int|null                                                                   $widgets_count
 * @method static \Illuminate\Database\Eloquent\Builder|Home newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Home newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Home ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Home query()
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereIconSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Location[] $citiesPopular
 * @property-read int|null $cities_popular_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Restaurant[] $restaurantsPopular
 * @property-read int|null $restaurants_popular_count
 */
class Home extends BaseHomeModel {
    use WidgetTrait;

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'article_type', 'icon_src'];

    //--- relationships ----

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities() {
        return $this->hasMany(Location::class, 'lang', 'lang');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citiesPopular() {
        return $this->cities()
            ->where('restaurants_count', '!=', 0)
            ->inRandomOrder() // Call to an undefined method Illuminate\Database\Eloquent\Collection<Modules\Food\Models\Location>::inRandomOrder().
            ->limit(5);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restaurants() {
        return $this->hasMany(Restaurant::class, 'lang', 'lang');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restaurantsPopular() {
        return $this->restaurants()
            ->inRandomOrder() // Call to an undefined method Illuminate\Database\Eloquent\Collection<Modules\Food\Models\Location>::inRandomOrder().
            ->limit(12);
    }
}//end model
>>>>>>> a6dde0f (first)
