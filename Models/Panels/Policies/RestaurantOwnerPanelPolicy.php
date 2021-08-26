<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

//use Modules\LU\Models\User as User;
//use Modules\Food\Models\BellBoy as Post;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Contracts\UserContract as User;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class RestaurantOwnerPanelPolicy.
 */
class RestaurantOwnerPanelPolicy extends XotBasePanelPolicy {
    /**
     * @return false
     */
    public function index(?UserContract $user, PanelContract $panel): bool {
        return false;
    }

    /**
     * @return false
     */
    public function edit(UserContract $user, PanelContract $panel): bool {
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

    public function changeStatusBellBoy(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function changeStatusCart(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
