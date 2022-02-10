<?php

declare(strict_types=1);

namespace Modules\Food\Models;

/*
use Carbon\Carbon;
////use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;
//--- traits
use Modules\Extend\Traits\Updater;
use Modules\Lang\Models\Traits\LinkedTrait;
*/
//--- services
//--- models ---

/**
 * { item_description }
 * da fare php artisan scout:import XRA\Blog\Models\Post.
 *
 * @mixin \Eloquent
 */
class Photo extends BaseModel {
    //use Searchable; //se non si crea prima indice da un sacco di errori
    //use Updater;
    //use LinkedTrait;
    protected $table = 'blog_post_photos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['post_id'];
    //protected $appends=['category_id'];
    //protected $casts = [ 'category_id' => 'integer', ];
    protected $dates = ['published_at'/* 'created_at', 'updated_at'*/];
    protected $primaryKey = 'post_id';
    public $incrementing = true;

    /* -- contenuto nel linkedTrait
    public function getTypeAttribute($value){
        return 'photo';
    }
    */
}
