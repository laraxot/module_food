<?php

namespace Modules\Food\Models;

use Modules\LU\Models\User;
use Modules\Xot\Models\XotBaseModel;

/**
 * Modules\Food\Models\Tip
 *
 * @property int $id
 * @property int $auth_user_id
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string $note
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $full_name
 * @property-read \Modules\Blog\Models\Profile $profile
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Tip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tip query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tip whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tip whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tip whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tip wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tip wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tip whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Tip extends XotBaseModel {
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'auth_user_id', 'note', 'post_id', 'post_type', 'created_by', 'updated_by'];
    /**
     * @var string[]
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    /**
     * @var bool
     */
    public $incrementing = true;
    /**
     * @var string
     */
    public string $icon = '<i class="far fa-trash-alt"></i>';

    /**
     * @var array
     */
    protected $casts = [
        //'published_at' => 'datetime:Y-m-d', // da verificare
    ];
    /**
     * @var array
     */
    protected $hidden = [
        //'password'
    ];
    /**
     * @var bool
     */
    public $timestamps = true;

    //------- relationships ------------

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class, 'auth_user_id', 'auth_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profile() {
        $profile_class = config('xra.model.profile');

        return $this->belongsTo($profile_class, 'auth_user_id', 'auth_user_id');
    }

    /**
     * @param mixed $value
     * @return string
     */
    public function getFullNameAttribute($value) {
        $user = $this->user;

        return $user->first_name.' '.$user->last_name;
    }
}//end class
