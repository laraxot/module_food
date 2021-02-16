<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class LocationPanelPolicy.
 */
class LocationPanelPolicy extends XotBasePanelPolicy {
    /*
    public function create($user,$post){
        return true;
    }
    */

    public function locationRecountRestaurants(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}