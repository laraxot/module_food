<?php
namespace Modules\Food\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\MorphPivot;

use Modules\Xot\Traits\Updater;

/**
 * Modules\Food\Models\ProfileMorph
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileMorph query()
 * @mixin \Eloquent
 */
class ProfileMorph extends BaseMorphPivot
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'id','post_id','post_type','profile_id','related_type', //-- testare se toglierli
        'auth_user_id',
        'title','value',
    ];
}
