<?php

declare(strict_types=1);

namespace Modules\Food\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

// ------- traits ---

// ------- services ----

/**
 * Modules\Food\Models\OpeningHour.
 *
 * @property int                             $id
 * @property int                             $post_id
 * @property string|null                     $day_name
 * @property int|null                        $day_of_week
 * @property string|null                     $open_at
 * @property string|null                     $close_at
 * @property int|null                        $is_closed
 * @property string|null                     $note
 * @property string                          $created_by
 * @property string                          $updated_by
 * @property string|null                     $deleted_by
 * @property string|null                     $created_ip
 * @property string|null                     $updated_ip
 * @property string|null                     $deleted_ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $post_type
 * @property Model|\Eloquent                 $parent
 *
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour query()
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereCloseAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereDayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereDayOfWeek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereDeletedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereOpenAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OpeningHour whereUpdatedIp($value)
 *
 * @mixin \Eloquent
 */
class OpeningHour extends BaseModel {
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'post_id', 'post_type', 'day_name', 'day_of_week', 'open_at', 'close_at', 'is_closed', 'note'];
    /**
     * @var string[]
     */
    protected array $times = ['open_at', 'close_at'];

    // ------------ relationship -----

    /**
     * Parent o linkable ??
     *
     * @return mixed
     * @return mixed
     */
    public function parent() {
        return $this->morphTo('post');
    }

    // ------------ mutators ---------

    /**
     * @param mixed $value
     *
     * @return false|string
     */
    public function getOpenAtAttribute($value) {
        return substr($value, 0, -3);
    }

    /**
     * @param mixed $value
     *
     * @return false|string
     */
    public function getCloseAtAttribute($value) {
        return substr($value, 0, -3);
    }

    /*
    public function getOpenAtAttribute($value) {
        if (\is_string($value)) {
            list($h, $m) = \explode(':', $value);
            $value = Carbon::createFromTime($h, $m, 0, 'Europe/Rome');
        }

        return $value;
    }

    public function getCloseAtAttribute($value) {
        if (\is_string($value)) {
            list($h, $m) = \explode(':', $value);
            $value = Carbon::createFromTime($h, $m, 0, 'Europe/Rome');
        }

        return $value;
    }
    */
    /*
    public function getPostTypeAttribute(?string $value):string {
        $post_type = collect(config('xra.model'))->search(get_class($this));
        if (false === $post_type) {
            $post_type = snake_case(class_basename($this));
        }

        return $post_type;
    }
    */
}
