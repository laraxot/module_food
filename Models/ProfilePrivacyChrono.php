<?php

namespace Modules\Food\Models;

/**
 * Modules\Food\Models\ProfilePrivacyChrono.
 *
 * @property int                             $id
 * @property int|null                        $auth_user_id
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $created_ip
 * @property string|null                     $updated_ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null                        $checkbox_position
 * @property string|null                     $checkbox_value
 * @property int|null                        $checkbox_label_id
 * @property string|null                     $checkbox_label
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereCheckboxLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereCheckboxLabelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereCheckboxPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereCheckboxValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfilePrivacyChrono whereUpdatedIp($value)
 * @mixin \Eloquent
 */
class ProfilePrivacyChrono extends BaseModel {
    /**
     * @var string[]
     */
    protected $fillable = ['auth_user_id', 'checkbox_position', 'checkbox_value', 'checkbox_label'];
}