<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

// use Modules\LU\Models\User as User;
// use Modules\Food\Models\BellBoy as Post;

// use Modules\Xot\Models\Policies\XotBasePolicy;

// use Modules\LU\Models\User;
// use Modules\LU\Models\User;
use Illuminate\Support\Facades\Gate;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class BaseRestaurantPanelPolicy.
 */
class BaseRestaurantPanelPolicy extends XotBasePanelPolicy {
    public function canEditRestaurant(UserContract $user, PanelContract $panel): bool {
        $restaurant_panel = $panel->findParentType('restaurant');
        if (null == $restaurant_panel) {
            return false;
        }

        return Gate::forUser($user)->allows('edit', $restaurant_panel);
    }

    public function create(UserContract $user, PanelContract $panel): bool {
        return $this->canEditRestaurant($user, $panel);
    }

    public function store(UserContract $user, PanelContract $panel): bool {
        return $this->canEditRestaurant($user, $panel);
    }

    public function edit(UserContract $user, PanelContract $panel): bool {
        return $this->canEditRestaurant($user, $panel);
    }

    public function indexEdit(UserContract $user, PanelContract $panel): bool {
        return $this->canEditRestaurant($user, $panel);
    }
}
