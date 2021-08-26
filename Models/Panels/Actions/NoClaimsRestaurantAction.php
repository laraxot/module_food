<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

//-------- services --------

use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class NoClaimsRestaurantAction.
 */
class NoClaimsRestaurantAction extends XotBasePanelAction {
    public bool $onContainer = false;

    public bool $onItem = true; //onlyContainer

    public string $icon = '<i class="fas fa-gavel"></i>';
    /**
     * @var string
     */
    public ?string $related = 'restaurant_owner';

    /**
     * Perform the action.
     *
     * @return mixed
     */
    public function handle() {
        return $this->panel->view();
        /*
        $view = ThemeService::getView().'.'.$this->getName();

        //dddx($view);

        return ThemeService::view($view)
        ->with('row', $this->row);
        //ddd($this->row);
        */
    }

    public function postHandle() {
        $data = request()->all();
        dddx($data);
    }
}
