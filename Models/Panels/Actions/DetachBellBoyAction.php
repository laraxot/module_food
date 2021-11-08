<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class DetachBellBoyAction.
 */
class DetachBellBoyAction extends XotBasePanelAction {
    public bool $onItem = true; //onlyContainer

    public bool $onContainer = false; //onlyContainer
    //mettere freccette su e giù

    public string $icon = '<i class="fas fa-motorcycle"></i>';

    public ?int $user_id;

    /**
     * @var string
     */
    public ?string $related = 'bell_boy';

    /**
     * DetachBellBoyAction constructor.
     *
     * @param int $user_id
     */
    public function __construct($user_id) {
        $this->user_id = $user_id;
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
        $restaurant = $this->panel->getRow();
        $restaurant->bellBoys()->wherePivot('user_id', $this->user_id)->detach();

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
