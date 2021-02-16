<?php

declare(strict_types=1);

namespace Modules\Food\Models;

use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\User;

/**
 * Modules\Food\Models\Waiter.
 *
 * @property int                                                                      $id
 * @property int|null                                                                 $auth_user_id
 * @property string|null                                                              $email
 * @property string|null                                                              $phone
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property int|null                                                                 $favorites_count
 * @property mixed                                                                    $first_name
 * @property mixed                                                                    $full_name
 * @property mixed                                                                    $guid
 * @property mixed                                                                    $image_src
 * @property mixed                                                                    $lang
 * @property mixed                                                                    $post_type
 * @property mixed                                                                    $price_complete_currency
 * @property mixed                                                                    $price_currency
 * @property mixed                                                                    $routename
 * @property mixed                                                                    $subtitle
 * @property mixed                                                                    $subtotal_currency
 * @property mixed                                                                    $sur_name
 * @property mixed                                                                    $title
 * @property mixed                                                                    $txt
 * @property mixed                                                                    $url
 * @property mixed                                                                    $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]    $images
 * @property int|null                                                                 $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property int|null                                                                 $my_favorites_count
 * @property \Modules\Blog\Models\Post|null                                           $post
 * @property \Modules\Blog\Models\Profile|null                                        $profile
 * @property User|null                                                                $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Waiter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Waiter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Waiter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Waiter whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waiter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waiter whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waiter whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waiter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waiter wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waiter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waiter whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 *
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Food\Models\Restaurant[] $restaurants
 * @property int|null                                                                   $restaurants_count
 */
class Waiter extends BaseModelLang {
    //protected $primaryKey = 'auth_user_id';

    use HasProfileTrait;

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'phone', 'email', 'auth_user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function restaurants() {
        return $this->morphRelated(Restaurant::class, false); //, 'auth_user_id');
    }

    /* //inserito dentro HasProfileTrait
    public function user() {
        return $this->hasOne(User::class, 'auth_user_id', 'auth_user_id');
    }
    */

    public function getPostTypeAttribute(?string $value): string {
        return 'waiter';
    }
}