<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class OpeningHourPolicy.
 */
class OpeningHourPolicy extends XotBasePolicy {
    public function store(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function edit(UserContract $user, ModelContract $post): bool {
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

    public function editOpeningHour(UserContract $user, ModelContract $post): bool {
        return true;
    }
}