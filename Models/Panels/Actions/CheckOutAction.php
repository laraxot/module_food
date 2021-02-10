<?php

namespace Modules\Food\Models\Panels\Actions;

//-------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class CheckOutAction
 * @package Modules\Food\Models\Panels\Actions
 */
class CheckOutAction extends XotBasePanelAction {
    //public $onContainer = false;
    /**
     * @var bool
     */
    public bool $onItem = true; //onlyContainer
    //mettere freccette su e giù
    /**
     * @var string
     */
    public string $icon = '';

        /**
    * Perform the action
* @return mixed
     */
    public function handle() {
        //dddx($this->panel->view());

        return $this->panel->view();
    }

    public function postHandle() {
    }
}
