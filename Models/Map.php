<?php
namespace Modules\Food\Models;
/*
use Illuminate\Database\Eloquent\Model;
//use Intervention\Image\ImageManagerStatic as Image;

//------ traits ----
//use Modules\Blog\Models\Traits\PostTrait;
//use Laravel\Scout\Searchable;
//use Modules\Extend\Traits\CrudSimpleTrait as CrudTrait;
//--- traits
use Modules\Extend\Traits\Updater;
use Modules\Xot\Models\Traits\LinkedTrait;
*/
class Map extends BaseModel
{
    //use Updater;
    //use Searchable;
    //use LinkedTrait;

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'blog_posts';
    protected $fillable = ['post_id', 'day_name', 'day_of_week', 'open_at', 'close_at', 'is_closed', 'note'];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        //'open_at','close_at',
    ];
}
