<?php

declare(strict_types=1);

namespace Modules\Food\Models;

use Modules\Geo\Models\Traits\GeoTrait;
use Modules\LU\Models\Traits\HasProfileTrait;

/**
 * Modules\Food\Models\RestaurantOwner.
 *
 * @property int                                                                      $id
 * @property int|null                                                                 $status
 * @property int|null                                                                 $auth_user_id
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property string|null                                                              $deleted_by
 * @property string|null                                                              $deleted_ip
 * @property string|null                                                              $created_ip
 * @property string|null                                                              $updated_ip
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property \Illuminate\Support\Carbon|null                                          $deleted_at
 * @property string|null                                                              $premise
 * @property string|null                                                              $premise_short
 * @property string|null                                                              $locality
 * @property string|null                                                              $locality_short
 * @property string|null                                                              $postal_town
 * @property string|null                                                              $postal_town_short
 * @property string|null                                                              $administrative_area_level_3
 * @property string|null                                                              $administrative_area_level_3_short
 * @property string|null                                                              $administrative_area_level_2
 * @property string|null                                                              $administrative_area_level_2_short
 * @property string|null                                                              $administrative_area_level_1
 * @property string|null                                                              $administrative_area_level_1_short
 * @property string|null                                                              $country
 * @property string|null                                                              $country_short
 * @property string|null                                                              $street_number
 * @property string|null                                                              $street_number_short
 * @property string|null                                                              $route
 * @property string|null                                                              $route_short
 * @property string|null                                                              $postal_code
 * @property string|null                                                              $postal_code_short
 * @property string|null                                                              $googleplace_url
 * @property string|null                                                              $googleplace_url_short
 * @property string|null                                                              $point_of_interest
 * @property string|null                                                              $point_of_interest_short
 * @property string|null                                                              $political
 * @property string|null                                                              $political_short
 * @property string|null                                                              $campground
 * @property string|null                                                              $campground_short
 * @property string|null                                                              $phone
 * @property string|null                                                              $website
 * @property string|null                                                              $email
 * @property string|null                                                              $formatted_address
 * @property string|null                                                              $min_order
 * @property string|null                                                              $delivery_cost
 * @property string|null                                                              $delivery_options
 * @property int|null                                                                 $order_action
 * @property string|null                                                              $price_currency
 * @property string|null                                                              $price_range
 * @property string|null                                                              $latitude
 * @property string|null                                                              $longitude
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property int|null                                                                 $favorites_count
 * @property mixed                                                                    $address
 * @property mixed                                                                    $first_name
 * @property mixed                                                                    $full_address
 * @property mixed                                                                    $full_name
 * @property mixed                                                                    $guid
 * @property mixed                                                                    $image_src
 * @property mixed                                                                    $lang
 * @property mixed                                                                    $post_type
 * @property mixed                                                                    $price_complete_currency
 * @property mixed                                                                    $routename
 * @property mixed                                                                    $subtitle
 * @property mixed                                                                    $subtotal_currency
 * @property mixed                                                                    $sur_name
 * @property mixed                                                                    $title
 * @property mixed                                                                    $txt
 * @property mixed                                                                    $url
 * @property mixed                                                                    $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]    $images
 * @property int|null                                                                 $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property int|null                                                                 $my_favorites_count
 * @property \Modules\Blog\Models\Post|null                                           $post
 * @property \Modules\Blog\Models\Profile|null                                        $profile
 * @property \Modules\LU\Models\User|null                                             $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner query()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereDeletedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereDeliveryCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereDeliveryOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereMinOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereOrderAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePriceCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner wherePriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereUpdatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantOwner withDistance($lat, $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 *
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Privacy[]    $privacies
 * @property int|null                                                                   $privacies_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Restaurant[] $restaurants
 * @property int|null                                                                   $restaurants_count
 */
class RestaurantOwner extends BaseModelLang {
    //protected $primaryKey = 'auth_user_id';
    use HasProfileTrait;
    use GeoTrait;

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'phone', 'email', 'vehicle_type', 'vehicle_model',
        'auth_user_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function restaurants() {
        return $this->morphRelated(Restaurant::class, false); //, 'auth_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function privacies() {
        return $this->morphRelated(\Modules\Blog\Models\Privacy::class, false); //, 'auth_user_id');
    }

    public function getPostTypeAttribute(?string $value): string {
        return 'restaurant_owner';
    }
}
