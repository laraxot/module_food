<<<<<<< HEAD
<?php

namespace Modules\Food\Models;

/**
 * Modules\Food\Models\RestaurantMap
 *
 * @property int $id
 * @property int|null $status
 * @property string|null $address
 * @property string|null $locality
 * @property string|null $locality_short
 * @property string|null $administrative_area_level_3
 * @property string|null $administrative_area_level_3_short
 * @property string|null $administrative_area_level_2
 * @property string|null $administrative_area_level_2_short
 * @property string|null $administrative_area_level_1
 * @property string|null $administrative_area_level_1_short
 * @property string|null $country
 * @property string|null $country_short
 * @property string|null $street_number
 * @property string|null $street_number_short
 * @property string|null $route
 * @property string|null $route_short
 * @property string|null $postal_code
 * @property string|null $postal_code_short
 * @property string|null $website
 * @property string|null $formatted_address
 * @property string|null $min_order
 * @property string|null $delivery_cost
 * @property string|null $delivery_options
 * @property int|null $order_action
 * @property string|null $price_currency
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $phone
 * @property string|null $premise
 * @property string|null $premise_short
 * @property string|null $googleplace_url_short
 * @property string|null $point_of_interest
 * @property string|null $point_of_interest_short
 * @property string|null $political
 * @property string|null $political_short
 * @property string|null $email
 * @property string|null $campground
 * @property string|null $campground_short
 * @property string|null $price_range
 * @property string|null $postal_town
 * @property string|null $postal_town_short
 * @property string $ratings_avg
 * @property int $ratings_count
 * @property int $checkout_enable
 * @property int $is_reclamed
 * @property string|null $googleplace_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property-read int|null $favorites_count
 * @property mixed $guid
 * @property mixed $image_src
 * @property-read mixed $lang
 * @property-read mixed $post_type
 * @property-read mixed $price_complete_currency
 * @property mixed $routename
 * @property-read mixed $subtitle
 * @property-read mixed $subtotal_currency
 * @property-read mixed $title
 * @property mixed $txt
 * @property mixed $url
 * @property-read mixed $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property-read int|null $my_favorites_count
 * @property-read \Modules\Blog\Models\Post|null $post
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCheckoutEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereDeliveryCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereDeliveryOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereIsReclamed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereMinOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereOrderAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePriceCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereRatingsAvg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereRatingsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 */
class RestaurantMap extends BaseModelLang
{
    /**
     * @var string
     */
    protected $table = 'restaurants'; /* da risolvere */

    //protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    //------------ mutators ------
}
=======
<?php

namespace Modules\Food\Models;

/**
 * Modules\Food\Models\RestaurantMap
 *
 * @property int $id
 * @property int|null $status
 * @property string|null $address
 * @property string|null $locality
 * @property string|null $locality_short
 * @property string|null $administrative_area_level_3
 * @property string|null $administrative_area_level_3_short
 * @property string|null $administrative_area_level_2
 * @property string|null $administrative_area_level_2_short
 * @property string|null $administrative_area_level_1
 * @property string|null $administrative_area_level_1_short
 * @property string|null $country
 * @property string|null $country_short
 * @property string|null $street_number
 * @property string|null $street_number_short
 * @property string|null $route
 * @property string|null $route_short
 * @property string|null $postal_code
 * @property string|null $postal_code_short
 * @property string|null $website
 * @property string|null $formatted_address
 * @property string|null $min_order
 * @property string|null $delivery_cost
 * @property string|null $delivery_options
 * @property int|null $order_action
 * @property string|null $price_currency
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $phone
 * @property string|null $premise
 * @property string|null $premise_short
 * @property string|null $googleplace_url_short
 * @property string|null $point_of_interest
 * @property string|null $point_of_interest_short
 * @property string|null $political
 * @property string|null $political_short
 * @property string|null $email
 * @property string|null $campground
 * @property string|null $campground_short
 * @property string|null $price_range
 * @property string|null $postal_town
 * @property string|null $postal_town_short
 * @property string $ratings_avg
 * @property int $ratings_count
 * @property int $checkout_enable
 * @property int $is_reclamed
 * @property string|null $googleplace_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property-read int|null $favorites_count
 * @property mixed $guid
 * @property mixed $image_src
 * @property-read mixed $lang
 * @property-read mixed $post_type
 * @property-read mixed $price_complete_currency
 * @property mixed $routename
 * @property-read mixed $subtitle
 * @property-read mixed $subtotal_currency
 * @property-read mixed $title
 * @property mixed $txt
 * @property mixed $url
 * @property-read mixed $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property-read int|null $my_favorites_count
 * @property-read \Modules\Blog\Models\Post|null $post
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCheckoutEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereDeliveryCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereDeliveryOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereIsReclamed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereMinOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereOrderAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePriceCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap wherePriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereRatingsAvg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereRatingsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMap whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 */
class RestaurantMap extends BaseModelLang
{
    /**
     * @var string
     */
    protected $table = 'restaurants'; /* da risolvere */

    //protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    //------------ mutators ------
}
>>>>>>> a6dde0f (first)
