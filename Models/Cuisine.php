<?php

declare(strict_types=1);

namespace Modules\Food\Models;

//--------- models --------
//--- services

//------ traits

/**
 * Modules\Food\Models\Cuisine.
 *
 * @property int                                                                      $id
 * @property int|null                                                                 $status
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
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
 * @property \Modules\Blog\Models\Post|null                                           $post
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Cuisine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cuisine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Cuisine query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cuisine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cuisine whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cuisine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cuisine whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cuisine whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cuisine whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 *
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\IngredientCat[] $changeCats
 * @property int|null                                                                      $change_cats_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\IngredientCat[] $ingredientCats
 * @property int|null                                                                      $ingredient_cats_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Recipe[]        $products
 * @property int|null                                                                      $products_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Recipe[]        $recipes
 * @property int|null                                                                      $recipes_count
 */
class Cuisine extends BaseModelLang {
    //-------- relationship ------

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function recipes() {
        return $this->morphRelated(Recipe::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function products() {
        return $this->recipes();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function ingredientCats() {
        $rows = $this->morphRelated(IngredientCat::class);

        return $rows;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function changeCats() {
        return $this->ingredientCats();
    }

    /**da fare */
    //public function cuisineCats() {
    //}
}
