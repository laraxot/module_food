<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;

/**
 * Class CuisinePolicy.
 */
class CuisinePolicy extends BaseRestaurantPolicy {
    public function addRecipe(UserContract $user, ModelContract $post): bool {
        return true;
    }

    //forse non serve perchè usiamo quello di recipepolicy

    public function addItemCart(UserContract $user, ModelContract $post): bool {
        return true;
    }
}