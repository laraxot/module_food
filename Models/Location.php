<?php

declare(strict_types=1);

namespace Modules\Food\Models;

//--------- models --------
use Modules\Blog\Models\Post;

//--- services

/**
 * Modules\Food\Models\Location.
 *
 * @property int                                                                                $id
 * @property int|null                                                                           $status
 * @property string|null                                                                        $term
 * @property string|null                                                                        $locality
 * @property int|null                                                                           $position
 * @property string|null                                                                        $administrative_area_level_3
 * @property string|null                                                                        $administrative_area_level_2
 * @property string|null                                                                        $administrative_area_level_1
 * @property string|null                                                                        $country
 * @property string|null                                                                        $street_number
 * @property string|null                                                                        $route
 * @property string|null                                                                        $postal_code
 * @property string|null                                                                        $latitude
 * @property string|null                                                                        $longitude
 * @property int|null                                                                           $radius
 * @property string|null                                                                        $formatted_address
 * @property string|null                                                                        $nearest_street
 * @property \Illuminate\Support\Carbon|null                                                    $created_at
 * @property \Illuminate\Support\Carbon|null                                                    $updated_at
 * @property string|null                                                                        $locality_short
 * @property string|null                                                                        $administrative_area_level_2_short
 * @property string|null                                                                        $administrative_area_level_1_short
 * @property string|null                                                                        $country_short
 * @property string|null                                                                        $created_by
 * @property string|null                                                                        $updated_by
 * @property string|null                                                                        $premise
 * @property string|null                                                                        $postal_town
 * @property string|null                                                                        $googleplace_url
 * @property string|null                                                                        $point_of_interest
 * @property string|null                                                                        $political
 * @property string|null                                                                        $campground
 * @property int|null                                                                           $restaurants_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[]           $favorites
 * @property int|null                                                                           $favorites_count
 * @property mixed                                                                              $guid
 * @property mixed                                                                              $image_src
 * @property mixed                                                                              $lang
 * @property mixed                                                                              $post_type
 * @property mixed                                                                              $price_complete_currency
 * @property mixed                                                                              $price_currency
 * @property mixed                                                                              $routename
 * @property mixed                                                                              $subtitle
 * @property mixed                                                                              $subtotal_currency
 * @property mixed                                                                              $title
 * @property mixed                                                                              $txt
 * @property mixed                                                                              $url
 * @property mixed                                                                              $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]              $images
 * @property int|null                                                                           $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[]           $myFavorites
 * @property int|null                                                                           $my_favorites_count
 * @property Post|null                                                                          $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\RestaurantProvider[] $restaurantProviders
 * @property int|null                                                                           $restaurant_providers_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Restaurant[]         $restaurants
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereNearestStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereRadius($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereRestaurantsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 */
class Location extends BaseModelLang {
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'term',
        'latitude', 'longitude',
        'premise', 'locality', 'postal_town',
        'administrative_area_level_3', 'administrative_area_level_2',  'administrative_area_level_1',
        'country',
        'street_number', 'route', 'postal_code',
        'googleplace_url',
        'point_of_interest', 'political', 'campground',
        'restaurants_count',
    ];

    /**
     * @var string[]
     */
    public static array $address_components = [
        'premise', 'locality', 'postal_town',
        'administrative_area_level_3', 'administrative_area_level_2',  'administrative_area_level_1',
        'country',
        'street_number', 'route', 'postal_code',
        'googleplace_url',
        'point_of_interest', 'political', 'campground',
    ];

    //---------- RELATIONSHIPS -----------

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function restaurantProviders() {
        $rows = $this->hasManyThrough(
            RestaurantProvider::class,
            Restaurant::class,
            'locality', // Foreign key on Restaurant table...
            'post_id', // Foreign key on posts table...
            'locality', // Local key on Location table...
            'post_id' // Local key on Restaurant table...
        );

        return $rows;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restaurants() {
        $related_table = with(new Restaurant())->getTable();

        return $this->hasMany(Restaurant::class, 'locality', 'locality')
            ->with(['cuisineCats', 'post']);
    }

    /**
     * @return \Staudenmeir\EloquentHasManyDeep\HasManyDeep
     */
    public function cuisineCats() {
        $related_table = with(new CuisineCat())->getTable();
        $post_table = with(new Post())->getTable();
        $post_table = 'post';

        return $this->hasManyDeepFromRelations($this->restaurants(), (new Restaurant())->cuisineCats())
            //->distinct()  // Call to private method distinct() of parent class Illuminate\Database\Eloquent\Relations\HasManyThrough<Illuminate\Database\Eloquent\Model>.
            /*->selectRaw($post_table.'.*,'.$related_table.'.*') //bug su hasManyDeepFromRelations
            ->with(['post'])
            */
            ;
    }

    //-------- mutators ------

    /**
     * @param mixed $value
     *
     * @return int
     */
    public function getRestaurantsCountAttribute($value) {
        if ('' != $value) {
            return $value;
        }
        $value = $this->restaurants->count();
        $this->update(['restaurants_count' => $value]);

        return $value;
    }
}
