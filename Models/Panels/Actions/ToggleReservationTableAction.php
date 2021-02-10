<?php

namespace Modules\Food\Models\Panels\Actions;

//-------- services --------

use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class ToggleReservationTableAction
 * @package Modules\Food\Models\Panels\Actions
 */
class ToggleReservationTableAction extends XotBasePanelAction {
    /**
     * @var bool
     */
    public bool $onContainer = false;
    /**
     * @var bool
     */
    public bool $onItem = true; //onlyContainer
    /**
     * @var string
     */
    public string $icon = '<i class="fas fa-chair"></i>';
    /**
     * @var string
     */
    public ?string $related = 'restaurant_owner';

        /**
    * Perform the action
* @return mixed
     */
    public function handle() {
        $view = ThemeService::getView().'.'.$this->getName();

        //return $view;

        return ThemeService::view($view)
            ->with('row', $this->row);
    }

    /**
     * @return mixed
     */
    public function postHandle() {
        $data = request()->all();

        $this->row->table_enable = ! $this->row->table_enable;
        $this->row->save();

        $view = ThemeService::getView().'.'.$this->getName().'_confirm';
        //$view = 'pub_theme::restaurant_owner.restaurant.show.'.$this->getName().'_confirm';
        \Session::flash('status', 'Operazione eseguita');
        //dddx($view);

        return ThemeService::view($view)
            ->with('row', $this->row);
    }
}
