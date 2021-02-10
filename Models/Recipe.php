<?php

namespace Modules\Food\Models;

/**
 * Modules\Food\Models\Recipe.
 *
 * @property int                                                                      $id
 * @property int|null                                                                 $status
 * @property int|null                                                                 $is_closed
 * @property string|null                                                              $note
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
 * @property \Modules\Blog\Models\Post|null                                           $post
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereDeletedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereUpdatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Cuisine[] $cuisines
 * @property-read int|null $cuisines_count
 */
class Recipe extends BaseModelLang {
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    //--- relationship --

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function cuisines() { //piu' di una o una sola ?
        $related = Cuisine::class;

        return $this->morphRelated($related, true); //mi posso giostrare i ruoli
    }

    /**
     * @return \Staudenmeir\EloquentHasManyDeep\HasManyDeep
     */
    public function ingredientCats() {  //categoria variazioni
        /*
        $params = \Route::current()->parameters();
        $cuisine_curr = collect($params)->where('type', 'cuisine')->last();
        return $cuisine_curr->ingredientCats();
        $foreignKeys=[];
        $localKeys=[];
        return $this->hasManyDeep(IngredientCat::class,[Recipe::class],$foreignKeys,$localKeys);
        */
        return $this->hasManyDeepFromRelations($this->cuisines(), (new Cuisine())->ingredientCats())
            //->distinct() ??????????????????????????????????? da testare !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            //->selectRaw($post_table.'.*,'.$related_table.'.*') //bug su hasManyDeepFromRelations
            //->with(['post']) //Call to private method with() of parent class Illuminate\Database\Eloquent\Relations\HasManyThrough<Illuminate\Database\Eloquent\Model>.
            ;
    }

    /*
    public function ingredients(){
        $related = ingredients::class;

        return $this->morphRelated($related)
    }
    */
}//end class
