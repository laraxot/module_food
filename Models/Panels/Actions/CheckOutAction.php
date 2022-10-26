<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

// -------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class CheckOutAction.
 */
class CheckOutAction extends XotBasePanelAction {
    // public $onContainer = false;

    public bool $onItem = true; // onlyContainer
    // mettere freccette su e giù

    public string $icon = '';

    /**
     * Perform the action.
     *
     * @return mixed
     */
    public function handle() {
        // dddx($this->panel->view());

        return $this->panel->view();
    }

    public function postHandle(): void {
    }
}
