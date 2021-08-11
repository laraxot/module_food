<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class HomePanelPolicy.
 */
class HomePanelPolicy extends XotBasePanelPolicy {
    public function uploadimagetest($user) {
        return true;
    }
}
