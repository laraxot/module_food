<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

// use Illuminate\Http\Request;
use Modules\Cart\Models\Cart;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class ChangeStatusCartAction.
 */
class ChangeStatusCartAction extends XotBasePanelAction {
    public bool $onItem = true; // onlyContainer

    public bool $onContainer = false; // onlyContainer
    /**
     * @var string
     */
    public ?string $related = 'cart';
    // mettere freccette su e giù

    public string $icon = '<i class="fas fa-motorcycle"></i>';

    public function handle() {
        // return 'preso ['.$this->user_id.']';
        $view = ThemeService::getView().'.'.$this->getName();
        $params = request()->all();
        extract($params);
        if (! isset($cart_id)) {
            dddx(['err' => 'cart_id is missing']);

            return;
        }
        $cart = Cart::query()->find($cart_id);
        // dddx(get_defined_vars());

        return ThemeService::view($view)
            ->with('row', $cart);
    }

    public function postHandle(): void {
        $data = request()->all();
        // dddx($data);
    }

    // end handle
}// end EditBellboyAction
