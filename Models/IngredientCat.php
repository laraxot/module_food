<?php

declare(strict_types=1);

namespace Modules\Food\Models;

/**
 * Modules\Food\Models\IngredientCat.
 *
 * @property int                                                                      $id
 * @property int|null                                                                 $status
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property string|null                                                              $deleted_by
 * @property string|null                                                              $created_ip
 * @property string|null                                                              $updated_ip
 * @property string|null                                                              $deleted_ip
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
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat query()
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat whereDeletedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCat whereUpdatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 *
 * @mixin \Eloquent
 *
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Ingredient[] $changes
 * @property int|null                                                                   $changes_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Ingredient[] $ingredients
 * @property int|null                                                                   $ingredients_count
 */
class IngredientCat extends BaseModelLang {
    // ---- relationship -----

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function ingredients() {
        return $this->morphRelated(Ingredient::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function changes() {
        return $this->ingredients();
    }

    // -------- mutators ----------
}
