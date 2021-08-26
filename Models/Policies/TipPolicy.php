<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class TipPolicy.
 */
class TipPolicy extends XotBasePolicy {
    public function create(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function destroy(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function indexEdit(UserContract $user, ModelContract $post): bool {
        return true;
    }
}
