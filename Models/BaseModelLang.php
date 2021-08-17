<?php

declare(strict_types=1);

namespace Modules\Food\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
/*
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Image\Manipulations as ImageManipulations;
use Spatie\MediaLibrary\File;
*/
//---------- traits
////use Laravel\Scout\Searchable;
use Modules\Xot\Models\Traits\LinkedTrait;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Models\Traits\HasPriceTrait;
use Modules\Xot\Traits\Updater;

/**
 * Modules\Food\Models\BaseModelLang.
 *
 * @property string $currency
 * @property float  $price
 * @property string $price_complete
 * @property int    $qty
 */
abstract class BaseModelLang extends Model implements ModelContract /*implements HasMedia*/
{
    use Updater;
    //use Searchable;
    use LinkedTrait;
    use HasPriceTrait;
    //use Cachable;
    /*
    use HasMediaTrait; //spatie
    //use ImageManipulations; //spatie per usare sepia ed altri
    */

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string[]
     */
    protected $fillable = ['id'];

    /**
     * @var string[]
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */
    protected $casts = [
        //'published_at' => 'datetime:Y-m-d', // da verificare
    ];

    protected $hidden = [
        //'password'
    ];

    public $timestamps = true;

    /*
    public function registerMediaConversions(Media $media = null)
    { //spatie

        $this->addMediaConversion('thumb')
              ->width(368)
              ->height(232)
              ->sharpen(10);

        $this->addMediaConversion('old-picture')
              ->sepia()
              ->border(10, 'black', Manipulations::BORDER_OVERLAY);
    }
    */
}