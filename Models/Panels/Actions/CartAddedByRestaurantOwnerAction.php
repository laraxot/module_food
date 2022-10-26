<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

// -------- services --------
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class CartAddedByRestaurantOwnerAction.
 */
class CartAddedByRestaurantOwnerAction extends XotBasePanelAction {
    public bool $onContainer = false;

    public bool $onItem = true; // onlyContainer

    public string $icon = '<i class="fas fa-cart-plus"></i>';
    /**
     * @var string
     */
    public ?string $related = 'restaurant_owner';
    // public $modal = 'iframe';   //essendo un actions filtrato tramite la funzione itemActions, pensavo che inserendo questo parametro diventasse modal
    // public $title = 'Titolo di prova'; //essendo un actions filtrato tramite la funzione itemActions, pensavo che inserendo questo parametro inserivo il titolo

    // -- Perform the action on the given models.

    /**
     * @return mixed
     */
    public function handle() {
        $view = ThemeService::getView().'.'.$this->getName();
        // dddx($view);

        return ThemeService::view($view)
            ->with('row', $this->row);
        // ddd($this->row);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postHandle() {
        $data = request()->all();
        // dddx(get_defined_vars());
        // dddx($data);
        [$containers,$items] = params2ContainerItem();
        $shop = collect($items)->firstWhere('post_type', 'restaurant');

        $data['status'] = 2; // ordine accettato

        $shop->carts()->create($data);

        \Session::flash('status', 'Operazione eseguita');

        return redirect()->back();
    }
}
