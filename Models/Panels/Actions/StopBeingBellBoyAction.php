<?php

namespace Modules\Food\Models\Panels\Actions;

//------- models ---
//-------- services --------
use Illuminate\Support\Facades\Auth;
use Modules\Food\Models\BellBoy;
use Modules\Food\Models\RestaurantMorph;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class StopBeingBellBoyAction.
 */
class StopBeingBellBoyAction extends XotBasePanelAction {
    //public $onContainer = false;

    public bool $onItem = true; //onlyContainer
    //mettere freccette su e giù

    public string $icon = '<i class="fas fa-motorcycle"></i>';

    public ?int $auth_user_id;

    /**
     * @return mixed
     */
    public function handle() {
        $view = 'pub_theme::bell_boy.modal.'.$this->getName();

        //dddx($view);

        //se e' una azione e non esiste la view si deve incazzare come una ape

        return ThemeService::view($view)
            ->with('row', $this->row);
    }

    //-- Perform the action on the given models.
    public function postHandle() {
        echo 'confirmed ['.request()->confirmed.']';
        if (request()->confirmed) {
            BellBoy::query()->where('auth_user_id', Auth::id())->delete();
            RestaurantMorph::query()->where('auth_user_id', Auth::id())->delete();
        }
    }

    /*
    public function postHandle() {
    }
    */
}