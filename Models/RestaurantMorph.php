<?php

declare(strict_types=1);

namespace Modules\Food\Models;

/*
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;
*/

use Modules\Blog\Models\Label;

/**
 * Modules\Food\Models\RestaurantMorph.
 *
 * @property int                             $id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $related_type
 * @property int|null                        $restaurant_id
 * @property int|null                        $auth_user_id
 * @property string|null                     $note
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null                        $role_id
 * @property int|null                        $status
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereRestaurantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantMorph whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class RestaurantMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $attributes = ['related_type' => 'restaurant'];

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'related_type',
        'auth_user_id',
        'note',
        'status',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed|string
     */
    public function statusLabel() {
        $row = $this->hasOne(Label::class, 'label_id', 'status')
                ->where('label_type', 'status');
        if ($row->exists()) {
            return $row->first()->title;
        }

        return 'sconosciuto ['.$this->status.']';
    }

    public function label(string $str): string {
        $row = Label::query()
                ->where('label_id', $this->$str)
                ->where('label_type', $str)
                ->first();
        if (is_object($row)) {
            return '<span class="badge badge-pillp-2 badge-'.$row->class.'">'.$row->title.'</span>';
        }

        return 'sconosciuto ['.$str.']['.$this->$str.']';
    }
}