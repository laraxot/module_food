<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

//use Modules\LU\Models\User;
use Illuminate\Support\Facades\Auth;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class RestaurantPolicy.
 */
class RestaurantPolicy extends XotBasePolicy {
    public function store(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function rate(?UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function edit(UserContract $user, ModelContract $post): bool {
        if ($post->restaurantOwners->count() > 0) {
            $my = $post->restaurantOwners->where('auth_user_id', $user->auth_user_id);
            if ($my->count() > 0) {
                return true;
            }
        } else {
            if ($post->created_by == $user->handle || $post->updated_by == $user->handle || $post->auth_user_id == $user->auth_user_id) {
                return true;
            }
        }

        return false;
    }

    //end store

    public function editRestaurantBasic(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function editRestaurantTxt(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function editRestaurantMap(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function editRestaurantPhoto(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function editRestaurantOpeningHours(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function editOpeningHour(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function editRestaurantContact(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function qrcodePdf(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function restaurantPdf(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function restaurantClaims(?UserContract $user, ModelContract $post): bool {
        return 0 == $post->restaurantOwners->count();
    }

    public function noClaimsRestaurant(UserContract $user, ModelContract $post): bool {
        if (Auth::check()) {
            $restaurant_owner = collect($post->restaurantOwners)->firstWhere('auth_user_id', $user->auth_user_id);
            if (is_object($restaurant_owner)) {
                return true;
            }
        }

        return false;
    }

    /*
    public function attachBellBoy(UserContract $user, ModelContract $post): bool {
        if (! $user->role('bell_boy')) {
            return false;
        }

        return ! $post->isBellBoyAuthID($user->auth_user_id);
        //return true;
    }

    public function detachBellBoy(UserContract $user, ModelContract $post): bool {
        return $post->isBellBoyAuthID($user->auth_user_id);
    }
     */

    public function toggleCheckout(UserContract $user, ModelContract $post): bool {
        if ($post->restaurantOwners->count() > 0) {
            $my = $post->restaurantOwners->where('auth_user_id', $user->auth_user_id);
            if ($my->count() > 0) {
                return true;
            }
        }

        return false;
    }

    public function attachBellBoyByRestaurantOwner(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function attachWaiter(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function cartAddedByRestaurantOwner(?UserContract $user, ModelContract $post): bool {
        if ($post->restaurantOwners->count() > 0) {
            $my = $post->restaurantOwners->where('auth_user_id', $user->auth_user_id);
            if ($my->count() > 0) {
                return true;
            }
        }

        return false;
    }

    public function addItemCartByRestaurantOwner(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function toggleReservationTable(UserContract $user, ModelContract $post): bool {
        if ($post->restaurantOwners->count() > 0) {
            $my = $post->restaurantOwners->where('auth_user_id', $user->auth_user_id);
            if ($my->count() > 0) {
                return true;
            }
        }

        return false;
    }

    public function createBookTable(?UserContract $user, ModelContract $post): bool {
        //return $post->table_enable;
        //dddx($post);

        if ($post->is_reclamed && $post->table_enable) {
            return true;
        }

        return false;
    }
}