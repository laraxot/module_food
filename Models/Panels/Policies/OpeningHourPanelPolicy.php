<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

//use Modules\LU\Models\User;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class OpeningHourPanelPolicy.
 */
class OpeningHourPanelPolicy extends XotBasePanelPolicy {
    public function store(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function edit(UserContract $user, PanelContract $panel): bool {
        /*
        //return true;
        if ($post->created_by == $user->handle || $post->updated_by == $user->handle || $post->auth_user_id == $user->auth_user_id) {
            return true;
        }

        return false;
        */

        //$restaurant_owners = $post->parent->restaurantOwners;
        //dddx($restaurant_owners);
        //dddx($user);
        return true;
    }

    public function editOpeningHour(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}