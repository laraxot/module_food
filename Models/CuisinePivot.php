<?php
namespace Modules\Food\Models;

//use Illuminate\Database\Eloquent\Model;
//------ traits ----
use Laravel\Scout\Searchable;
use Modules\Blog\Models\Post;
//--- services
use Modules\Theme\Services\ThemeService;
//--------- models --------
//use Modules\Extend\Traits\Updater;
//use Modules\Xot\Models\Traits\LinkedTrait;

class CuisinePivot extends BaseModel{
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