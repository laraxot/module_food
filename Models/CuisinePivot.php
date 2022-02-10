<?php

declare(strict_types=1);

namespace Modules\Food\Models;

//use Illuminate\Database\Eloquent\Model;
//------ traits ----
//use Laravel\Scout\Searchable;
//--- services
//--------- models --------
//use Modules\Extend\Traits\Updater;
//use Modules\Lang\Models\Traits\LinkedTrait;

class CuisinePivot extends BaseModel {
    /*
    use Updater;
    use Searchable;
    use LinkedTrait;
    */
    protected $table = 'blog_post_cuisine_pivot';
    protected $primaryKey = 'id';
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['post_id', 'note'];
}
