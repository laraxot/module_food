<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

//-------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class ToggleCheckoutAction.
 */
class ToggleCheckoutAction extends XotBasePanelAction {
    public bool $onContainer = false;

    public bool $onItem = true; //onlyContainer

    public string $icon = '<i class="fas fa-cart-plus"></i>';

    /**
     * Perform the action.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle() {
        $this->row->checkout_enable = ! $this->row->checkout_enable;
        $this->row->save();

        return redirect()->back();
    }
}
