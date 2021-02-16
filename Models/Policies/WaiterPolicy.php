<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class WaiterPolicy.
 */
class WaiterPolicy extends XotBasePolicy {
    public function indexEdit(UserContract $user, ModelContract $post): bool {
        return true;
    }
}