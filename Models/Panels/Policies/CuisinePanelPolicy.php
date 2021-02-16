<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;

/**
 * Class CuisinePanelPolicy.
 */
class CuisinePanelPolicy extends BaseRestaurantPanelPolicy {
    public function addRecipe(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    //forse non serve perchè usiamo quello di recipepolicy

    public function addItemCart(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}