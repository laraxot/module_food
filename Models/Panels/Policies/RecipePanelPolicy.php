<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

use Illuminate\Support\Facades\Gate;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;

/**
 * Class RecipePanelPolicy.
 */
class RecipePanelPolicy extends BaseRestaurantPanelPolicy {
    public function addItemCart(UserContract $user, PanelContract $panel): bool {
        //dddx($panel->getParents());
        $restaurant_panel = $panel->findParentType('restaurant');
        if (null == $restaurant_panel) {
            return false;
        }

        //return  Gate::allows('edit', $restaurant_panel)) {
        $restaurant = $restaurant_panel->getRow();
        if ($restaurant->is_reclamed && $restaurant->checkout_enable) {
            return true;
        }

        return false;
    }
}
