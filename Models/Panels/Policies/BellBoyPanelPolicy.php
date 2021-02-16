<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class BellBoyPanelPolicy.
 */
class BellBoyPanelPolicy extends XotBasePanelPolicy {
    public function index(?UserContract $user, PanelContract $panel): bool {
        return false;
    }

    public function create(?UserContract $user, PanelContract $panel): bool {
        /*
        if (null == $user) {
            return true;
        }
        $restaurant = $panel->findParentType('restaurant');

        if ($user->profile->isBellBoyOfThisRestaurant($restaurant)) {
            return false;
        }

        return true;
        */
        //da rifare
        return false;
    }

    public function store(UserContract $user, PanelContract $panel): bool {
        return ! $user->hasRole('bell_boy');
    }

    public function detach(UserContract $user, PanelContract $panel): bool {
        /*
        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');
        */
        /*
        $restaurant = $panel->findParentType('restaurant');

        if ($user->profile->isBellBoyOfThisRestaurant($restaurant)) {
            return true;
        }

        return false;
        */
        // da rifare
        return false;
    }

    public function rate(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function editBellboy(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function bellBoyTakeCart(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function whereIAm(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function stopBeingBellBoy(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function changeStatus0(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function changeStatus1(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function changeStatus2(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function changeStatus3(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class BellBoyPanelPolicy.
 */
class BellBoyPanelPolicy extends XotBasePanelPolicy {
    public function index(?UserContract $user, PanelContract $panel): bool {
        return false;
    }

    public function create(?UserContract $user, PanelContract $panel): bool {
        /*
        if (null == $user) {
            return true;
        }
        $restaurant = $panel->findParentType('restaurant');

        if ($user->profile->isBellBoyOfThisRestaurant($restaurant)) {
            return false;
        }

        return true;
        */
        //da rifare
        return false;
    }

    public function store(UserContract $user, PanelContract $panel): bool {
        return ! $user->hasRole('bell_boy');
    }

    public function detach(UserContract $user, PanelContract $panel): bool {
        /*
        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');
        */
        /*
        $restaurant = $panel->findParentType('restaurant');

        if ($user->profile->isBellBoyOfThisRestaurant($restaurant)) {
            return true;
        }

        return false;
        */
        // da rifare
        return false;
    }

    public function rate(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function editBellboy(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function bellBoyTakeCart(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function whereIAm(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function stopBeingBellBoy(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function changeStatus0(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function changeStatus1(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function changeStatus2(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function changeStatus3(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
>>>>>>> a6dde0f (first)
