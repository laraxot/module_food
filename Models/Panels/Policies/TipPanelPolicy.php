<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class TipPanelPolicy.
 */
class TipPanelPolicy extends XotBasePanelPolicy {
    public function create(\Modules\Xot\Contracts\UserContract $user, \Modules\Xot\Contracts\PanelContract $panel): bool {
        return true;
    }

    public function destroy(\Modules\Xot\Contracts\UserContract $user, \Modules\Xot\Contracts\PanelContract $panel): bool {
        return true;
    }

    public function indexEdit(\Modules\Xot\Contracts\UserContract $user, \Modules\Xot\Contracts\PanelContract $panel): bool {
        return true;
    }
}