<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class RestaurantPanelPolicy.
 */
class RestaurantPanelPolicy extends XotBasePanelPolicy {
    public function store(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function rate(?UserContract $user, PanelContract $panel): bool {
        return true; // chiunque puo' votare
    }

    public function indexEdit(UserContract $user, PanelContract $panel): bool {
        return $this->edit($user, $panel);
    }

    public function edit(UserContract $user, PanelContract $panel): bool {
        $post = $panel->getRow();
        $my = $post->restaurantOwners->where('user_id', $user->user_id);
        if ($my->count() > 0) {
            return true;  // e' un mio ristorante
        }
        $claimed = $post->restaurantOwners->count() > 0;
        if ($claimed) {
            return false; // il ristorante ha proprietari e non sono tra quelli
        }
        if ($post->created_by == $user->handle /* || $post->updated_by == $user->handle */ || $post->user_id == $user->user_id) {
            // dddx([$post->created_by, $post->updated_by, $user->handle, $post->user_id, $user->user_id]);

            return true; // sono quello che lo ha suggerito
        }

        return false;
    }

    // end store

    public function editRestaurantBasic(UserContract $user, PanelContract $panel): bool {
        return $this->edit($user, $panel);
    }

    public function editRestaurantTxt(UserContract $user, PanelContract $panel): bool {
        return $this->edit($user, $panel);
    }

    public function editRestaurantMap(UserContract $user, PanelContract $panel): bool {
        return $this->edit($user, $panel);
    }

    public function editRestaurantPhoto(UserContract $user, PanelContract $panel): bool {
        return $this->edit($user, $panel);
    }

    public function editRestaurantOpeningHours(UserContract $user, PanelContract $panel): bool {
        return $this->edit($user, $panel);
    }

    public function editOpeningHour(UserContract $user, PanelContract $panel): bool {
        return $this->edit($user, $panel);
    }

    public function editRestaurantContact(UserContract $user, PanelContract $panel): bool {
        return $this->edit($user, $panel);
    }

    public function qrcodePdf(UserContract $user, PanelContract $panel): bool {
        return $this->edit($user, $panel);
    }

    public function restaurantPdf(UserContract $user, PanelContract $panel): bool {
        return $this->edit($user, $panel);
    }

    public function restaurantClaims(UserContract $user, PanelContract $panel): bool {
        $post = $panel->getRow();
        if (! $user->role('restaurant_owner')) {
            return false;
        }

        return 0 == $post->restaurantOwners->count();
    }

    public function noClaimsRestaurant(UserContract $user, PanelContract $panel): bool {
        $post = $panel->getRow();
        $restaurant_owner = collect($post->restaurantOwners)->firstWhere('user_id', $user->user_id);
        if (is_object($restaurant_owner)) {
            return true;
        }

        return false;
    }

    /*
    public function attachBellBoy(UserContract $user, PanelContract $panel): bool {
        if (! $user->role('bell_boy')) {
            return false;
        }
        $post = $panel->getRow();

        return ! $post->isBellBoyAuthID($user->user_id);
        //return true;
    }

    public function detachBellBoy(UserContract $user, PanelContract $panel): bool {
        $post = $panel->getRow();

        return $post->isBellBoyAuthID($user->user_id);
    }
    */

    public function toggleCheckout(UserContract $user, PanelContract $panel): bool {
        $post = $panel->getRow();

        if ($post->restaurantOwners->count() > 0) {
            $my = $post->restaurantOwners->where('user_id', $user->user_id);
            if ($my->count() > 0) {
                return true;
            }
        }

        return false;
    }

    public function attachBellBoyByRestaurantOwner(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function attachWaiter(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * Function cartAddedByRestaurantOwner.
     */
    public function cartAddedByRestaurantOwner(?UserContract $user, PanelContract $panel): bool {
        $post = $panel->getRow();
        if ($post->restaurantOwners->count() > 0) {
            $my = $post->restaurantOwners->where('user_id', $user->user_id);
            if ($my->count() > 0) {
                return true;
            }
        }

        return false;
    }

    public function addItemCartByRestaurantOwner(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function toggleReservationTable(UserContract $user, PanelContract $panel): bool {
        $post = $panel->getRow();
        if ($post->restaurantOwners->count() > 0) {
            $my = $post->restaurantOwners->where('user_id', $user->user_id);
            if ($my->count() > 0) {
                return true;
            }
        }

        return false;
    }

    public function createBookTable(?UserContract $user, PanelContract $panel): bool {
        $post = $panel->getRow();
        if ($post->is_reclamed && $post->table_enable) {
            return true;
        }

        return false;
    }

    public function checkOut(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
