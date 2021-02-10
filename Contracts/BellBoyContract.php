<?php

namespace Modules\Food\Contracts;

/**
 * Modules\Food\Contracts\BellBoyContract.
 *
 * @property int                                                                      $id
 * @property int|null                                                                 $auth_user_id
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property string|null                                                              $birthday
 * @property string|null                                                              $email
 * @property int|null                                                                 $phone
 * @property string|null                                                              $vehicle_type
 * @property string|null                                                              $vehicle_model
 * @property int|null                                                                 $driving_license
 * @property int|null                                                                 $has_car
 * @property int|null                                                                 $has_motorcycle
 * @property int|null                                                                 $has_bicycle
 * @property \Illuminate\Database\Eloquent\Collection|Cart[]                          $carts
 * @property int|null                                                                 $carts_count
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
 * @property mixed                                                                    $price_currency
 * @property mixed                                                                    $profile_id
 * @property mixed                                                                    $routename
 * @property mixed                                                                    $status_html
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
 * @property \Modules\Food\Models\Place|null                                          $place
 * @property \Modules\Blog\Models\Post|null                                           $post
 * @property \Modules\Blog\Models\Profile|null                                        $profile
 * @property Label|null                                                               $statusLabel
 * @property User|null                                                                $user
 * @property Label|null                                                               $vehicleTypeLabel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy query()
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereDrivingLicense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereHasBicycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereHasCar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereHasMotorcycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereVehicleModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereVehicleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy withDistance($lat, $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 *
 * @property PivotContract|null $pivot
 * @property string|null        $statusHtml
 */
interface BellBoyContract {
}
