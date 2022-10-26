<?php

declare(strict_types=1);

namespace Modules\Food\Models;

/*
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;
*/
/**
 * Modules\Food\Models\IngredientMorph.
 *
 * @property int                             $id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $related_type
 * @property int|null                        $ingredient_id
 * @property int|null                        $user_id
 * @property string|null                     $price
 * @property string|null                     $price_currency
 * @property string|null                     $note
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph whereIngredientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph wherePriceCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientMorph whereUpdatedBy($value)
 *
 * @mixin \Eloquent
 */
class IngredientMorph extends BaseMorphPivot {
    // use Updater;
    /**
     * mettere funziona getFillable ed aggiungere solo i 2 campi mancanti.
     */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'ingredient_id', 'related_type',
        'user_id',
        'price', 'price_currency',
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
    protected $attributes = ['related_type' => 'ingredient_cat'];
}
