<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class WhereIAmAction.
 */
class WhereIAmAction extends XotBasePanelAction {
    public bool $onItem = true; // onlyContainer

    public bool $onContainer = false; // onlyContainer

    public string $icon = '<i class="fas fa-map-marker-alt"></i>';

    /**
     * @return mixed
     */
    public function handle() {
        $view = 'pub_theme::bell_boy.modal.'.$this->getName();

        return ThemeService::view($view)
            ->with('row', $this->row);
    }

    // end handle

    /**
     * @return mixed
     */
    public function postHandle() {
        // $up = $this->updateRow();
        // $this->setRow($up->row);
        $this->panel->update(request()->all());

        return $this->handle();
    }
}// end EditBellboyAction
