<?php

declare(strict_types=1);

namespace Modules\Food\Models;

/**
 * Modules\Food\Models\ProfileMorph.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileMorph query()
 * @mixin \Eloquent
 */
class ProfileMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 'post_id', 'post_type', 'profile_id', 'related_type', //-- testare se toglierli
        'auth_user_id',
        'title', 'value',
    ];
}
