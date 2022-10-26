<?php

declare(strict_types=1);

namespace Modules\Food\Models;

/**
 * Modules\Food\Models\RestaurantProvider.
 *
 * @property int                             $id
 * @property string|null                     $provider
 * @property int                             $restaurant_id
 * @property string                          $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantProvider whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantProvider whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantProvider whereRestaurantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantProvider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantProvider whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RestaurantProvider whereUrl($value)
 *
 * @mixin \Eloquent
 */
class RestaurantProvider extends BaseModel {
    /**
     * @var string
     */
    protected $table = 'restaurant_providers';

    /**
     * @var string[]
     */
    protected $fillable = ['provider', 'post_id', 'url'];

    // ----- mutator ---
    /*
    public function getPostTypeAttribute(?string $value)
{
        return 'provider';
    }
    */

    public function setProviderAttribute(string $value): void {
        $this->attributes['provider'] = strtolower($value);
    }
}
