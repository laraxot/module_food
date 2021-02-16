<<<<<<< HEAD
<?php

namespace Modules\Food\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;

/**
 * Modules\Food\Models\PrivacyMorph
 *
 * @property int $id
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $related_type
 * @property int|null $privacy_id
 * @property string|null $title
 * @property int|null $value
 * @property int|null $auth_user_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph wherePrivacyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereValue($value)
 * @mixin \Eloquent
 */
class PrivacyMorph extends BaseMorphPivot
{
    /**
     * @var string[]
     */
    protected $attributes = ['related_type' => 'privacy'];
}
=======
<?php

namespace Modules\Food\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;

/**
 * Modules\Food\Models\PrivacyMorph
 *
 * @property int $id
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $related_type
 * @property int|null $privacy_id
 * @property string|null $title
 * @property int|null $value
 * @property int|null $auth_user_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph wherePrivacyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereValue($value)
 * @mixin \Eloquent
 */
class PrivacyMorph extends BaseMorphPivot
{
    /**
     * @var string[]
     */
    protected $attributes = ['related_type' => 'privacy'];
}
>>>>>>> a6dde0f (first)
