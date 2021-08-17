<?php
namespace Modules\Food\Models;

//use Illuminate\Database\Eloquent\Model;
////use Laravel\Scout\Searchable;

//--- services
use Modules\Theme\Services\ThemeService;
//use Modules\Extend\Traits\Updater;
//--- TRAITS ---
//use Modules\Xot\Models\Traits\LinkedTrait;
//----- models -----
use Modules\Blog\Models\PostRelated;

/**
 * { item_description }
 * da fare php artisan scout:import XRA\Blog\Models\Post.
 *
 * @mixin \Eloquent
 */
class Cart extends BaseModel{

	protected $fillable=[
		'id',
		'post_id','post_type',   // identidicativo ristorante
		'status_id',             // stato carrello
	];
	//----- relationship -----

	//----- mutators -----

}