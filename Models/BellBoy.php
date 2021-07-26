<?php

namespace Modules\Food\Models;

use Illuminate\Database\Eloquent\Collection;
// per dizionario morph
use Modules\Blog\Models\Label;
use Modules\Cart\Models\Cart;
use Modules\Food\Contracts\BellBoyContract;
use Modules\Geo\Models\Traits\GeoTrait;
use Modules\LU\Models\Traits\HasProfileTrait;
//--- contracts
use Modules\LU\Models\User;

//----- traits ----
//use Modules\Rating\Models\Traits\RatingTrait;

/**
 * Modules\Food\Models\BellBoy.
 *
 * @property int                                                                      $id
 * @property int|null                                                                 $auth_user_id
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property string|null                                                              $birthday
 * @property string|null                                                              $email
 * @property int|null                                                                 $phone
 * @property string|null                                                              $vehicle_type
 * @property string|null                                                              $vehicle_model
 * @property int|null                                                                 $driving_license
 * @property int|null                                                                 $has_car
 * @property int|null                                                                 $has_motorcycle
 * @property int|null                                                                 $has_bicycle
 * @property \Illuminate\Database\Eloquent\Collection|Cart[]                          $carts
 * @property int|null                                                                 $carts_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property int|null                                                                 $favorites_count
 * @property mixed                                                                    $address
 * @property mixed                                                                    $first_name
 * @property mixed                                                                    $full_address
 * @property mixed                                                                    $full_name
 * @property mixed                                                                    $guid
 * @property mixed                                                                    $image_src
 * @property mixed                                                                    $lang
 * @property mixed                                                                    $post_type
 * @property mixed                                                                    $price_complete_currency
 * @property mixed                                                                    $price_currency
 * @property mixed                                                                    $profile_id
 * @property mixed                                                                    $routename
 * @property mixed                                                                    $status_html
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
 * @property \Modules\Food\Models\Place|null                                          $place
 * @property \Modules\Blog\Models\Post|null                                           $post
 * @property \Modules\Blog\Models\Profile|null                                        $profile
 * @property Label|null                                                               $statusLabel
 * @property User|null                                                                $user
 * @property Label|null                                                               $vehicleTypeLabel
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy query()
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereDrivingLicense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereHasBicycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereHasCar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereHasMotorcycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereVehicleModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy whereVehicleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BellBoy withDistance($lat, $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 * @property Collection|Restaurant[] $restaurants
 * @property int|null                $restaurants_count
 */
class BellBoy extends BaseModelLang implements BellBoyContract {
    const Candidate = 0;

    const Refused = 1; //rifiutato (da un determinato ristorante)

    const Free = 2;

    const Busy = 3; //occupato

    //use RatingTrait;
    use GeoTrait;
    use HasProfileTrait;
    //protected $table = 'profiles';
    //protected $primaryKey = 'auth_user_id';

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'birthday', 'phone', 'email', 'vehicle_type', 'vehicle_model',
        'auth_user_id', 'has_car', 'has_motorcycle', 'has_bicycle',
    ];

    ///--- relations ---
    /* //inserito dentro HasProfileTrait
    public function user() {
    return $this->hasOne(User::class, 'auth_user_id', 'auth_user_id');
    }
    */

    /* sostituito da Modules\LU\Models\Traits\HasProfileTrait
    public function profile() {
        $profile_class = config('xra.model.profile');

        return $this->hasOne($profile_class, 'auth_user_id', 'auth_user_id');
    }
    */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehicleTypeLabel() {
        return $this->hasOne(Label::class, 'label_id', 'vehicle_type')
                ->where('label_type', 'vehicle_type');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function statusLabel() {
        return $this->hasOne(Label::class, 'label_id', 'status')
                ->where('label_type', 'status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carts() {
        return $this->hasMany(Cart::class, 'bell_boy_id', 'id');
    }

    /**
     * @param string $value
     */
    public function getPostTypeAttribute(?string $value): string {
        return 'bell_boy';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function restaurants() {
        return $this->morphRelated(Restaurant::class, false);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function place() {
        return $this->morphOne(Place::class, 'post');
    }

    ///----- mutators ---

    /**
     * @param mixed $value
     *
     * @return int
     */
    public function getProfileIdAttribute($value) {
        $profile = $this->profile;
        $value = $profile->id;
        /*
        $this->profile_id=$value;
        $this->save();
        */
        return $value;
    }

    /**
     * @param mixed $value
     *
     * @return mixed|string
     */
    public function getStatusHtmlAttribute($value) {
        if (! is_object($this->pivot)) {
            return $value;
        }
        $status = $this->pivot->status;

        switch ($status) {
            case 0:
                $value = '<span class="badge badge-pillp-2 badge-warning-light">Candidate</span>';
            break;
            case 1:
                $value = '<span class="badge badge-pillp-2 badge-dark-light">Refused</span>';
            break;
            case 2:
                $value = '<span class="badge badge-pillp-2 badge-success-light">Free</span>';
            break;
            case 3:
                $value = '<span class="badge badge-pillp-2 badge-danger-light">Busy</span>';
            break;

            /*
            default:
            code to be executed if n is different from all labels;
            */
            }

        return $value;
    }

    /* in HasProfileTrait
    public function getFullNameAttribute($value) {
        if ('' != $value) {
            return $value;
        }
        $user = $this->user;
        if (! is_object($user)) {
            return $value;
        }
        $value = $user->full_name;

        return $value;
    }
    */
}//end class