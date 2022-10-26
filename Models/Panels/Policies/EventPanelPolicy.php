<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class EventPanelPolicy.
 */
class EventPanelPolicy extends XotBasePanelPolicy {
    public function create(UserContract $user, PanelContract $panel): bool {
        return true;  // se e' loggato puo' creare ristorante non proprietario ristorante
    }
}
