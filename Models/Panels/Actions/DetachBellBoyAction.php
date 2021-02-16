<<<<<<< HEAD
<?php

namespace Modules\Food\Models\Panels\Actions;

use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class DetachBellBoyAction
 * @package Modules\Food\Models\Panels\Actions
 */
class DetachBellBoyAction extends XotBasePanelAction {
    /**
     * @var bool
     */
    public bool $onItem = true; //onlyContainer
    /**
     * @var bool
     */
    public bool $onContainer = false; //onlyContainer
    //mettere freccette su e giù
    /**
     * @var string
     */
    public string $icon = '<i class="fas fa-motorcycle"></i>';

    public ?int $auth_user_id;

    /**
     * @var string
     */
    public ?string $related = 'bell_boy';

    /**
     * DetachBellBoyAction constructor.
     * @param int $auth_user_id
     */
    public function __construct($auth_user_id) {
        $this->auth_user_id = $auth_user_id;
    }

    /**
     * @return mixed
     */
    public function handle() {
        /*
        $view = 'pub_theme::restaurant.modal.'.$this->getName();

        //return $view;

        return ThemeService::view($view)
        ->with('row', $this->row);
        //ddd($this->row);
        */
        return $this->panel->view();
    }

    /**
     * @return mixed
     */
    public function postHandle() {
        $restaurant = $this->panel->row;
        $restaurant->bellBoys()->wherePivot('auth_user_id', $this->auth_user_id)->detach();

        //return ' bell boy scollegato';

        //return redirect()->back();

        \Session::flash('status', 'Operazione eseguita');

        return $this->panel->view();
        /*
        $view = 'pub_theme::restaurant.modal.'.$this->getName();
        $view .= '_deleted';

        try {
            return ThemeService::view($view)
            ->with('row', $this->row);
        } catch (\Exception $e) {
            dddx([$e->getMessage(), $e]);
        }
        */
    }

    //end handle
}//end EditBellboyAction
=======
<?php

namespace Modules\Food\Models\Panels\Actions;

use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class DetachBellBoyAction
 * @package Modules\Food\Models\Panels\Actions
 */
class DetachBellBoyAction extends XotBasePanelAction {
    /**
     * @var bool
     */
    public bool $onItem = true; //onlyContainer
    /**
     * @var bool
     */
    public bool $onContainer = false; //onlyContainer
    //mettere freccette su e giù
    /**
     * @var string
     */
    public string $icon = '<i class="fas fa-motorcycle"></i>';

    public ?int $auth_user_id;

    /**
     * @var string
     */
    public ?string $related = 'bell_boy';

    /**
     * DetachBellBoyAction constructor.
     * @param int $auth_user_id
     */
    public function __construct($auth_user_id) {
        $this->auth_user_id = $auth_user_id;
    }

    /**
     * @return mixed
     */
    public function handle() {
        /*
        $view = 'pub_theme::restaurant.modal.'.$this->getName();

        //return $view;

        return ThemeService::view($view)
        ->with('row', $this->row);
        //ddd($this->row);
        */
        return $this->panel->view();
    }

    /**
     * @return mixed
     */
    public function postHandle() {
        $restaurant = $this->panel->row;
        $restaurant->bellBoys()->wherePivot('auth_user_id', $this->auth_user_id)->detach();

        //return ' bell boy scollegato';

        //return redirect()->back();

        \Session::flash('status', 'Operazione eseguita');

        return $this->panel->view();
        /*
        $view = 'pub_theme::restaurant.modal.'.$this->getName();
        $view .= '_deleted';

        try {
            return ThemeService::view($view)
            ->with('row', $this->row);
        } catch (\Exception $e) {
            dddx([$e->getMessage(), $e]);
        }
        */
    }

    //end handle
}//end EditBellboyAction
>>>>>>> a6dde0f (first)
