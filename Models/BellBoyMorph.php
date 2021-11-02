<?php

declare(strict_types=1);

namespace Modules\Food\Models;

/**
 * Modules\Food\Models\BellBoyMorph.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoyMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoyMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoyMorph query()
 * @mixin \Eloquent
 */
class BellBoyMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 'post_id', 'post_type', 'bellboy_id', 'related_type', //-- testare se toglierli
        'user_id',
        'title', 'value',
    ];
}
