<?php

namespace Modules\Food\Models;

/**
 * Modules\Food\Models\ProfilePrivacy.
 *
 * @property int                             $id
 * @property int|null                        $auth_user_id
 * @property int|null                        $flag_id
 * @property string|null                     $flag_value
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $created_ip
 * @property string|null                     $updated_ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string                          $field_description
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy whereFieldDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy whereFlagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy whereFlagValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacy whereUpdatedIp($value)
 * @mixin \Eloquent
 */
class ProfilePrivacy extends BaseModel {
    /**
     * @var string[]
     */
    protected $fillable = ['auth_user_id', 'flag_id', 'flag_value', 'field_description'];
}