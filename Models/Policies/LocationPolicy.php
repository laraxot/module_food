<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class LocationPolicy.
 */
class LocationPolicy extends XotBasePolicy {
    /*
    public function create($user,$post){
        return true;
    }
    */

    public function locationRecountRestaurants(UserContract $user, ModelContract $post): bool {
        return true;
    }
}