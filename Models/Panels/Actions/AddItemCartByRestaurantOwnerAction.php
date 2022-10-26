<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

// -------- services --------
use Modules\Cart\Models\Cart;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class AddItemCartByRestaurantOwnerAction.
 */
class AddItemCartByRestaurantOwnerAction extends XotBasePanelAction {
    public bool $onContainer = false;

    public bool $onItem = true; // onlyContainer

    public string $icon = '<i class="fas fa-cart-plus"></i>';

    // -- Perform the action on the given models.
    public function handle() {
        $view = ThemeService::getView().'.'.$this->getName();
        $params = request()->all();
        extract($params);
        if (! isset($cart_id)) {
            dddx(['err' => 'cart_id is missing']);

            return;
        }
        // dddx($view);
        // dddx(get_defined_vars());
        // dddx($this->row);
        $cart = Cart::find($cart_id);

        return ThemeService::view($view)
            ->with('row', $cart);
        // ddd($this->row);
    }

    /*
    public function postHandle() {
        $data = request()->all();
        dddx('AddItemCartByRestaurantOwnerAction preso');
    }
    */
}
