<?php

declare(strict_types=1);

namespace Modules\Food\Models;

use Modules\Geo\Models\Place as BasePlaceModel;

/**
 * Modules\Food\Models\Place.
 *
 * @property int                                                                      $post_id
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property string|null                                                              $deleted_by
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
 * @property string|null                                                              $formatted_address
 * @property string|null                                                              $post_type
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property int|null                                                                 $favorites_count
 * @property mixed                                                                    $guid
 * @property mixed                                                                    $image_src
 * @property mixed                                                                    $lang
 * @property mixed                                                                    $routename
 * @property mixed                                                                    $subtitle
 * @property mixed                                                                    $title
 * @property mixed                                                                    $txt
 * @property mixed                                                                    $url
 * @property mixed                                                                    $user_handle
 * @property mixed                                                                    $value
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]    $images
 * @property int|null                                                                 $images_count
 * @property \Illuminate\Database\Eloquent\Model|\Eloquent                            $linked
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property int|null                                                                 $my_favorites_count
 * @property \Modules\Lang\Models\Post|null                                           $post
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Place newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Place newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Place query()
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 */
class Place extends BasePlaceModel {
}
