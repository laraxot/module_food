<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class HomePanelPolicy.
 */
class HomePanelPolicy extends XotBasePanelPolicy {
    public function artisan(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /**
     * new.
     */
    public function home(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function dashboard(UserContract $user, PanelContract $panel): bool {
        return true; // da aggiungere pezzi
    }
}
