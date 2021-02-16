<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

//-------- services --------
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class BaseEditRestaurantAction.
 */
abstract class BaseEditRestaurantAction extends XotBasePanelAction {
    //public $onContainer = false;

    public bool $onItem = true; //onlyContainer
    //mettere freccette su e giù

    public string $icon = '<i class="fa fa-edit"></i>';

    /**
     * Perform the action.
     *
     * @return mixed
     */
    public function handle() {
        /*
        $view = 'pub_theme::restaurant.modal.'.$this->getName();

        //return $view;

        return ThemeService::view($view)
            ->with('row', $this->row);
        //ddd($this->row);
        //*/
        return $this->panel->view();
    }

    /**
     * @return mixed
     */
    public function postHandle() {
        //dddx(get_defined_vars());
        /*
        $up = $this->updateRow();
        $this->setRow($up->row);
        */
        $this->panel->update(request()->all());

        return $this->handle();
    }
}