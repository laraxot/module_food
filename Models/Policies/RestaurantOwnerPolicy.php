<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

//use Modules\LU\Models\User;
//use Modules\Blog\Models\Privacy;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class RestaurantOwnerPolicy.
 */
class RestaurantOwnerPolicy extends XotBasePolicy {
    public function index(?UserContract $user, ModelContract $post): bool {
        return false;
    }

    /*
    public function create(User $user,ModelContract $post):bool{
        return true;  //caso particolare che serve per fare la registrazione
    }

    public function store(?User $user,ModelContract $post):bool{
        return true;  //caso particolare che serve per fare la registrazione
    }
    */

    public function changeStatusBellBoy(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function changeStatusCart(UserContract $user, ModelContract $post): bool {
        return true;
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

//use Modules\LU\Models\User;
//use Modules\Blog\Models\Privacy;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class RestaurantOwnerPolicy.
 */
class RestaurantOwnerPolicy extends XotBasePolicy {
    public function index(?UserContract $user, ModelContract $post): bool {
        return false;
    }

    /*
    public function create(User $user,ModelContract $post):bool{
        return true;  //caso particolare che serve per fare la registrazione
    }

    public function store(?User $user,ModelContract $post):bool{
        return true;  //caso particolare che serve per fare la registrazione
    }
    */

    public function changeStatusBellBoy(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function changeStatusCart(UserContract $user, ModelContract $post): bool {
        return true;
    }
}
>>>>>>> a6dde0f (first)
