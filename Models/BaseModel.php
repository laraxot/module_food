<?php

declare(strict_types=1);

namespace Modules\Food\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
*/
// ---------- traits
// //use Laravel\Scout\Searchable;
use Modules\Xot\Traits\Updater;
use Spatie\Image\Manipulations as ImageManipulations;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model { /* implements HasMedia */
    use Updater;
    // use Cachable;
    // use Searchable;
    use HasFactory;
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
        // 'published_at' => 'datetime:Y-m-d', // da verificare
    ];
    /**
     * @var array
     */
    protected $hidden = [
        // 'password'
    ];
    /**
     * @var bool
     */
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
