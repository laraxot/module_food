<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Services\PanelService;

/**
 * Class RecipePolicy.
 */
class RecipePolicy extends BaseRestaurantPolicy {
    public function addItemCart(UserContract $user, ModelContract $post): bool {
        //$panel = PanelService::getRequestPanel();

        $post_panel = PanelService::get($post);
        $restaurant = (collect($post_panel->getParents())->filter(function ($item) {
            return 'restaurant' == $item->postType();
        })->first());

        if ($restaurant->is_reclamed && $restaurant->checkout_enable) {
            return true;
        }

        return false;
    }
}