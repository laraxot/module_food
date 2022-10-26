<?php

declare(strict_types=1);

namespace Modules\Food\Models;

/**
 * Modules\Food\Models\Ingredient.
 *
 * @property int                                                                      $id
 * @property int|null                                                                 $status
 * @property string                                                                   $created_by
 * @property string                                                                   $updated_by
 * @property string                                                                   $deleted_by
 * @property string                                                                   $created_ip
 * @property string                                                                   $updated_ip
 * @property string                                                                   $deleted_ip
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property \Illuminate\Support\Carbon|null                                          $deleted_at
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property int|null                                                                 $favorites_count
 * @property mixed                                                                    $guid
 * @property mixed                                                                    $image_src
 * @property mixed                                                                    $lang
 * @property mixed                                                                    $post_type
 * @property mixed                                                                    $price_complete_currency
 * @property mixed                                                                    $price_currency
 * @property mixed                                                                    $routename
 * @property mixed                                                                    $subtitle
 * @property mixed                                                                    $subtotal_currency
 * @property mixed                                                                    $title
 * @property mixed                                                                    $txt
 * @property mixed                                                                    $url
 * @property mixed                                                                    $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]    $images
 * @property int|null                                                                 $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property int|null                                                                 $my_favorites_count
 * @property \Modules\Lang\Models\Post|null                                           $post
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    whereDeletedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ingredient    whereUpdatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 *
 * @mixin \Eloquent
 */
class Ingredient extends BaseModelLang {
}
