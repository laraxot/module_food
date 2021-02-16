<<<<<<< HEAD
<?php
namespace Modules\Food\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\MorphPivot;

use Modules\Xot\Traits\Updater;

/**
 * Modules\Food\Models\BellBoyMorph
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoyMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoyMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoyMorph query()
 * @mixin \Eloquent
 */
class BellBoyMorph extends BaseMorphPivot
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'id','post_id','post_type','bellboy_id','related_type', //-- testare se toglierli
        'auth_user_id',
        'title','value',
    ];
}
=======
<?php
namespace Modules\Food\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\MorphPivot;

use Modules\Xot\Traits\Updater;

/**
 * Modules\Food\Models\BellBoyMorph
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoyMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoyMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoyMorph query()
 * @mixin \Eloquent
 */
class BellBoyMorph extends BaseMorphPivot
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'id','post_id','post_type','bellboy_id','related_type', //-- testare se toglierli
        'auth_user_id',
        'title','value',
    ];
}
>>>>>>> a6dde0f (first)
