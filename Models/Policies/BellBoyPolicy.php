<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

//use Modules\LU\Models\User;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class BellBoyPolicy.
 */
class BellBoyPolicy extends XotBasePolicy {
    public function index(?UserContract $user, ModelContract $post): bool {
        return false;
    }

    public function create(?UserContract $user, ModelContract $post): bool {
        /* da rifare
        if (null == $user) {
            return true;
        }

        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');

        if ($user->profile->isBellBoyOfThisRestaurant($restaurant)) {
            return false;
        }

        return true;
        */
        return false;
    }

    public function detach(UserContract $user, ModelContract $post): bool {
        /* da rifare
        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');

        if ($user->profile->isBellBoyOfThisRestaurant($restaurant)) {
            return true;
        }

        return false;
        */
        return false;
    }

    public function rate(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function editBellboy(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function bellBoyTakeCart(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function whereIAm(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function stopBeingBellBoy(UserContract $user, ModelContract $post): bool {
        return true;
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

//use Modules\LU\Models\User;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class BellBoyPolicy.
 */
class BellBoyPolicy extends XotBasePolicy {
    public function index(?UserContract $user, ModelContract $post): bool {
        return false;
    }

    public function create(?UserContract $user, ModelContract $post): bool {
        /* da rifare
        if (null == $user) {
            return true;
        }

        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');

        if ($user->profile->isBellBoyOfThisRestaurant($restaurant)) {
            return false;
        }

        return true;
        */
        return false;
    }

    public function detach(UserContract $user, ModelContract $post): bool {
        /* da rifare
        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');

        if ($user->profile->isBellBoyOfThisRestaurant($restaurant)) {
            return true;
        }

        return false;
        */
        return false;
    }

    public function rate(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function editBellboy(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function bellBoyTakeCart(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function whereIAm(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function stopBeingBellBoy(UserContract $user, ModelContract $post): bool {
        return true;
    }
}
>>>>>>> a6dde0f (first)
