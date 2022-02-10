<?php

declare(strict_types=1);

namespace Modules\Food\Models;

//use Illuminate\Database\Eloquent\Model;
////use Laravel\Scout\Searchable;

//--- services
//use Modules\Extend\Traits\Updater;
//--- TRAITS ---
//use Modules\Lang\Models\Traits\LinkedTrait;
//----- models -----

/**
 * { item_description }
 * da fare php artisan scout:import XRA\Blog\Models\Post.
 *
 * @mixin \Eloquent
 */
class Cart extends BaseModel {
    protected $fillable = [
        'id',
        'post_id', 'post_type',   // identidicativo ristorante
        'status_id',             // stato carrello
    ];
    //----- relationship -----

    //----- mutators -----
}
