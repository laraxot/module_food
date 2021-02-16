<<<<<<< HEAD
<?php

namespace Modules\Food\Models;

//------ traits ----
//--- services

//--------- models --------

/**
 * Modules\Food\Models\CuisineCat
 *
 * @property int $id
 * @property int|null $status
 * @property int|null $is_closed
 * @property string|null $note
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property string|null $created_ip
 * @property string|null $updated_ip
 * @property string|null $deleted_ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property-read int|null $favorites_count
 * @property mixed $guid
 * @property mixed $image_src
 * @property-read mixed $lang
 * @property-read mixed $post_type
 * @property-read mixed $price_complete_currency
 * @property-read mixed $price_currency
 * @property mixed $routename
 * @property-read mixed $subtitle
 * @property-read mixed $subtotal_currency
 * @property-read mixed $title
 * @property mixed $txt
 * @property mixed $url
 * @property-read mixed $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property-read int|null $my_favorites_count
 * @property-read \Modules\Blog\Models\Post|null $post
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat query()
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereDeletedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereUpdatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Restaurant[] $restaurants
 * @property-read int|null $restaurants_count
 */
class CuisineCat extends BaseModelLang {
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'note'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function restaurants() {
        return  $this->morphRelated(Restaurant::class, true);
    }
}
=======
<?php

namespace Modules\Food\Models;

//------ traits ----
//--- services

//--------- models --------

/**
 * Modules\Food\Models\CuisineCat
 *
 * @property int $id
 * @property int|null $status
 * @property int|null $is_closed
 * @property string|null $note
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property string|null $created_ip
 * @property string|null $updated_ip
 * @property string|null $deleted_ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property-read int|null $favorites_count
 * @property mixed $guid
 * @property mixed $image_src
 * @property-read mixed $lang
 * @property-read mixed $post_type
 * @property-read mixed $price_complete_currency
 * @property-read mixed $price_currency
 * @property mixed $routename
 * @property-read mixed $subtitle
 * @property-read mixed $subtotal_currency
 * @property-read mixed $title
 * @property mixed $txt
 * @property mixed $url
 * @property-read mixed $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property-read int|null $my_favorites_count
 * @property-read \Modules\Blog\Models\Post|null $post
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat query()
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereDeletedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuisineCat whereUpdatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Restaurant[] $restaurants
 * @property-read int|null $restaurants_count
 */
class CuisineCat extends BaseModelLang {
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'note'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function restaurants() {
        return  $this->morphRelated(Restaurant::class, true);
    }
}
>>>>>>> a6dde0f (first)
