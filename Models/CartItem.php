<?php

declare(strict_types=1);

namespace Modules\Food\Models;

//use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;

//--- services
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
class CartItem extends BaseModel {
    protected $fillable = [
        'post_id', 'post_type',
        'auth_user_id', 'sess_id', //se e' loggato e' collegato con auth_user_id, se no con la sessione
        'pivot_id', 'qty', 'parent_id',
    ];

    //----- relationship -----
    public function pivot() {
        return $this->hasOne(PostRelated::class, 'id', 'pivot_id');
    }

    public function sons() {
        return $this->hasMany(CartItem::class, 'parent_id', 'id');
    }

    //----- mutators -----
    public function getStoreUrlAttribute($value) {
        $routename = \Request::route()->getName();
        $routename = 'container0.container1.container2.container3.store';
        $params = \Route::current()->parameters();
        $params['container3'] = 'cart_item';
        //return '/#'.$routename;
        return route($routename, $params);
    }

    /*
    public function getProductAttribute($value){
        return $this->pivot->rel
    }
    */
    public function getSubtotAttribute($value) {
        $subtot = 0;
        $subtot += $this->pivot->price; //fare mutator ??
        foreach ($this->sons as $son) {
            $subtot += $son->pivot->price;
        }

        return $subtot;
    }
}
