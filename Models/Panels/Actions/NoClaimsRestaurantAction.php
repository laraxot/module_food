<<<<<<< HEAD
<?php

namespace Modules\Food\Models\Panels\Actions;

//-------- services --------

use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class NoClaimsRestaurantAction
 * @package Modules\Food\Models\Panels\Actions
 */
class NoClaimsRestaurantAction extends XotBasePanelAction {
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
    public string $icon = '<i class="fas fa-gavel"></i>';
    /**
     * @var string
     */
    public ?string $related = 'restaurant_owner';

        /**
    * Perform the action
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
=======
<?php

namespace Modules\Food\Models\Panels\Actions;

//-------- services --------

use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class NoClaimsRestaurantAction
 * @package Modules\Food\Models\Panels\Actions
 */
class NoClaimsRestaurantAction extends XotBasePanelAction {
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
    public string $icon = '<i class="fas fa-gavel"></i>';
    /**
     * @var string
     */
    public ?string $related = 'restaurant_owner';

        /**
    * Perform the action
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
>>>>>>> a6dde0f (first)
