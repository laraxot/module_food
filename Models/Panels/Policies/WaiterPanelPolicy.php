<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class WaiterPanelPolicy.
 */
class WaiterPanelPolicy extends XotBasePanelPolicy {
    public function indexEdit(\Modules\Xot\Contracts\UserContract $user, \Modules\Xot\Contracts\PanelContract $panel): bool {
        return true;
    }
}
