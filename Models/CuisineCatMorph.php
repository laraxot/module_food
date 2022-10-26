<?php

declare(strict_types=1);

namespace Modules\Food\Models;

/*
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;
*/
/**
 * Modules\Food\Models\CuisineCatMorph.
 *
 * @property int                             $id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $related_type
 * @property int|null                        $cuisine_cat_id
 * @property int|null                        $user_id
 * @property string|null                     $note
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph whereCuisineCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCatMorph whereUpdatedBy($value)
 *
 * @mixin \Eloquent
 */
class CuisineCatMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $attributes = ['related_type' => 'cuisine_cat'];
}
