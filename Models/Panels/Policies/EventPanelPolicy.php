<?php

namespace Modules\Food\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class EventPanelPolicy
 * @package Modules\Food\Models\Panels\Policies
 */
class EventPanelPolicy extends XotBasePanelPolicy {
    /**
     * @param UserContract $user
     * @param PanelContract $panel
     * @return bool
     */
    public function create(UserContract $user, PanelContract $panel):bool {
        return true;  //se e' loggato puo' creare ristorante non proprietario ristorante
    }
}
