<?php

namespace Modules\Food\Models;

/*
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;
*/
/**
 * Modules\Food\Models\CuisineMorph.
 *
 * @property int                             $id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $related_type
 * @property int|null                        $cuisine_id
 * @property int|null                        $auth_user_id
 * @property string|null                     $note
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null                        $pos
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph whereCuisineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineMorph whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class CuisineMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $fillable = [
        'pos',
    ];
    /**
     * @var string[]
     */
    protected $attributes = ['related_type' => 'cuisine'];
}