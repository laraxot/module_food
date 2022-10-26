<?php

declare(strict_types=1);

namespace Modules\Food\Models;

/*
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;
*/
/**
 * Modules\Food\Models\IngredientCatMorph.
 *
 * @property int                             $id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $related_type
 * @property int|null                        $ingredient_cat_id
 * @property int|null                        $user_id
 * @property string|null                     $note
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph whereIngredientCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IngredientCatMorph whereUpdatedBy($value)
 *
 * @mixin \Eloquent
 */
class IngredientCatMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $attributes = ['related_type' => 'ingredient_cat'];
}
