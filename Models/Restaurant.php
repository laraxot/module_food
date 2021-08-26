<?php

declare(strict_types=1);

namespace Modules\Food\Models;

//------ traits ----
//--- services

//------- blog models
//------ food models
//-------- services
use Modules\Blog\Models\Traits\AmenityTrait;
use Modules\Food\Contracts\RestaurantContract;
//---------- traits
use Modules\Geo\Models\Traits\GeoTrait;
use Modules\Rating\Models\Traits\RatingTrait;

/**
 * Modules\Food\Models\Restaurant.
 *
 * @property int                                                                                $id
 * @property int|null                                                                           $status
 * @property string|null                                                                        $address
 * @property string|null                                                                        $locality
 * @property string|null                                                                        $locality_short
 * @property string|null                                                                        $administrative_area_level_3
 * @property string|null                                                                        $administrative_area_level_3_short
 * @property string|null                                                                        $administrative_area_level_2
 * @property string|null                                                                        $administrative_area_level_2_short
 * @property string|null                                                                        $administrative_area_level_1
 * @property string|null                                                                        $administrative_area_level_1_short
 * @property string|null                                                                        $country
 * @property string|null                                                                        $country_short
 * @property string|null                                                                        $street_number
 * @property string|null                                                                        $street_number_short
 * @property string|null                                                                        $route
 * @property string|null                                                                        $route_short
 * @property string|null                                                                        $postal_code
 * @property string|null                                                                        $postal_code_short
 * @property string|null                                                                        $website
 * @property string|null                                                                        $formatted_address
 * @property string|null                                                                        $min_order
 * @property string|null                                                                        $delivery_cost
 * @property string|null                                                                        $delivery_options
 * @property int|null                                                                           $order_action
 * @property string|null                                                                        $price_currency
 * @property string|null                                                                        $created_by
 * @property string|null                                                                        $updated_by
 * @property \Illuminate\Support\Carbon|null                                                    $created_at
 * @property \Illuminate\Support\Carbon|null                                                    $updated_at
 * @property string|null                                                                        $latitude
 * @property string|null                                                                        $longitude
 * @property string|null                                                                        $phone
 * @property string|null                                                                        $premise
 * @property string|null                                                                        $premise_short
 * @property string|null                                                                        $googleplace_url_short
 * @property string|null                                                                        $point_of_interest
 * @property string|null                                                                        $point_of_interest_short
 * @property string|null                                                                        $political
 * @property string|null                                                                        $political_short
 * @property string|null                                                                        $email
 * @property string|null                                                                        $campground
 * @property string|null                                                                        $campground_short
 * @property string|null                                                                        $price_range
 * @property string|null                                                                        $postal_town
 * @property string|null                                                                        $postal_town_short
 * @property string                                                                             $ratings_avg
 * @property int|null                                                                           $ratings_count
 * @property int                                                                                $checkout_enable
 * @property int                                                                                $is_reclamed
 * @property string|null                                                                        $googleplace_url
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Amenity[]            $amenityObjectives
 * @property int|null                                                                           $amenity_objectives_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Cart\Models\BookingItem[]        $bookingItems
 * @property int|null                                                                           $booking_items_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Cart\Models\Booking[]            $bookings
 * @property int|null                                                                           $bookings_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Cart\Models\Cart[]               $carts
 * @property int|null                                                                           $carts_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Comment[]            $comments
 * @property int|null                                                                           $comments_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Contact[]            $contacts
 * @property int|null                                                                           $contacts_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[]           $favorites
 * @property int|null                                                                           $favorites_count
 * @property mixed                                                                              $full_address
 * @property mixed                                                                              $guid
 * @property mixed                                                                              $image_src
 * @property mixed                                                                              $is_open
 * @property mixed                                                                              $lang
 * @property mixed                                                                              $my_rating
 * @property mixed                                                                              $post_type
 * @property mixed                                                                              $price_complete_currency
 * @property mixed                                                                              $routename
 * @property mixed                                                                              $subtitle
 * @property mixed                                                                              $subtotal_currency
 * @property mixed                                                                              $title
 * @property mixed                                                                              $txt
 * @property mixed                                                                              $url
 * @property mixed                                                                              $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]              $images
 * @property int|null                                                                           $images_count
 * @property \Modules\Food\Models\Location|null                                                 $location
 * @property \Modules\Food\Models\Location                                                      $locations
 * @property \Modules\Food\Models\Location                                                      $maps
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Cart\Models\Booking[]            $myBookingsWithThisRestaurant
 * @property int|null                                                                           $my_bookings_with_this_restaurant_count
 * @property \Modules\Cart\Models\Cart|null                                                     $myCartWithThisRestaurant
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[]           $myFavorites
 * @property int|null                                                                           $my_favorites_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[]           $myRatings
 * @property int|null                                                                           $my_ratings_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\OpeningHour[]        $openingHours
 * @property int|null                                                                           $opening_hours_count
 * @property \Modules\Blog\Models\Post|null                                                     $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[]           $ratingObjectives
 * @property int|null                                                                           $rating_objectives_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[]           $ratings
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\RestaurantProvider[] $restaurantProviders
 * @property int|null                                                                           $restaurant_providers_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Tip[]                $tips
 * @property int|null                                                                           $tips_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCheckoutEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereDeliveryCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereDeliveryOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereIsReclamed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereMinOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereOrderAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePriceCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereRatingsAvg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereRatingsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant withDistance($lat, $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant withRating()
 * @mixin \Eloquent
 *
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Amenity[]         $amenities
 * @property int|null                                                                        $amenities_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Article[]         $articles
 * @property int|null                                                                        $articles_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\BellBoy[]         $bellBoys
 * @property int|null                                                                        $bell_boys_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Cart\Models\Cart[]            $cartsByRestaurantOwner
 * @property int|null                                                                        $carts_by_restaurant_owner_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Cart\Models\Cart[]            $cartsInProgress
 * @property int|null                                                                        $carts_in_progress_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\CuisineCat[]      $cuisineCats
 * @property int|null                                                                        $cuisine_cats_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Cuisine[]         $cuisines
 * @property int|null                                                                        $cuisines_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Event[]           $events
 * @property int|null                                                                        $events_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\IngredientCat[]   $ingredientCats
 * @property int|null                                                                        $ingredient_cats_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Photo[]           $photos
 * @property int|null                                                                        $photos_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Cuisine[]         $productCats
 * @property int|null                                                                        $product_cats_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Profile[]         $profiles
 * @property int|null                                                                        $profiles_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\RestaurantOwner[] $restaurantOwners
 * @property int|null                                                                        $restaurant_owners_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Waiter[]          $waiters
 * @property int|null                                                                        $waiters_count
 * @property string|null                                                                     $address1
 * @property string|null                                                                     $address2
 * @property string|null                                                                     $address3
 * @property string|null                                                                     $city
 * @property string|null                                                                     $zip_code
 * @property string|null                                                                     $state
 * @property string|null                                                                     $display_phone
 * @property string|null                                                                     $price
 * @property string|null                                                                     $review_count
 * @property string|null                                                                     $is_closed
 * @property string|null                                                                     $rating
 * @property \Illuminate\Support\Carbon|null                                                 $deleted_at
 * @property string|null                                                                     $deleted_by
 * @property string|null                                                                     $deleted_ip
 * @property string|null                                                                     $created_ip
 * @property string|null                                                                     $updated_ip
 * @property string|null                                                                     $street_number_long
 * @property int                                                                             $table_enable
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereAddress3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereDeletedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereDisplayPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereReviewCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereStreetNumberLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereTableEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereUpdatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereZipCode($value)
 */
class Restaurant extends BaseModelLang implements RestaurantContract {
    use RatingTrait;
    use AmenityTrait;
    use GeoTrait;
    use Traits\RestaurantRelationshipsTrait;
    use Traits\RestaurantMutatorsTrait;

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'min_order', 'price_currency',
        'address',
        'street_number', 'street_number_short', 'route', 'route_short',
        'locality', 'locality_short',
        'administrative_area_level_3', 'administrative_area_level_3_short',
        'administrative_area_level_2', 'administrative_area_level_2_short',
        'administrative_area_level_1', 'administrative_area_level_1_short',
        'country', 'country_short',
        'postal_code', 'postal_code_short',
        'latitude', 'longitude',
        'route_short', 'locality_short',
        'administrative_area_level_3_short', 'administrative_area_level_2_short',
        'administrative_area_level_1_short', 'country_short', 'postal_code_short',
        'formatted_address',
        'city', 'zip_code', 'country', 'state', 'phone', 'email', 'website',
        'display_phone', 'price', 'is_closed', 'review_count',
        //'yelp_url', 'foodora_url', 'foodracers_url', 'justeat_url',  // spostati in restaurant provider
        //'rating',
        'delivery_cost', 'delivery_options', 'order_action', 'checkout_enable', 'is_reclamed', 'table_enable',
        //'my_rating',
    ];
    /**
     * @var array
     */
    protected $casts = [
        //'my_rating' => 'array'
    ];
    /**
     * @var array
     */
    protected $appends = [
        //'my_rating'
        //'post', //4 livewire
    ];
    /**
     * @var string[]
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //-------- relationship -----------

    //-------- mutators -----------
    /*
    public function getPostAttribute($value) { //4 livewire
        $obj = $this->post()->first();
        if (! is_object($obj)) {
            return [];
        }

        return $obj->toArray();
    }
    */
    //--------------Scope ----------------
}
