<?php

namespace Modules\Food\Models;

//use Illuminate\Database\Eloquent\Relations\MorphPivot;
//use Modules\Xot\Traits\Updater;

/**
 * Modules\Food\Models\RecipeMorph.
 *
 * @property int                             $id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $related_type
 * @property int|null                        $recipe_id
 * @property int|null                        $auth_user_id
 * @property string|null                     $price
 * @property string|null                     $price_currency
 * @property int|null                        $launch_available
 * @property int|null                        $dinner_available
 * @property string|null                     $note
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereDinnerAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereLaunchAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph wherePriceCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereRecipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeMorph whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class RecipeMorph extends BaseMorphPivot {
    //use Updater;
    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 'post_id', 'post_type', 'recipe_id', 'related_type', //-- testare se toglierli
        'auth_user_id',
        'price', 'price_currency', 'launch_available', 'dinner_available', 'note',
    ];
    /*
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $appends = [];
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    */
    /**
     * @var string[]
     */
    protected $attributes = ['related_type' => 'recipe'];
}