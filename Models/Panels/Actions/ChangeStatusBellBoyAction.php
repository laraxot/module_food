<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

// use Illuminate\Http\Request;
use Modules\Food\Models\BellBoy;
use Modules\Food\Models\Restaurant;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class ChangeStatusBellBoyAction.
 */
class ChangeStatusBellBoyAction extends XotBasePanelAction {
    public bool $onItem = true; // onlyContainer

    public bool $onContainer = false; // onlyContainer
    /**
     * @var string
     */
    public ?string $related = 'bell_boy';
    // mettere freccette su e giù

    public string $icon = '<i class="fas fa-motorcycle"></i>';

    public ?int $user_id;

    /**
     * @return mixed
     */
    public function handle() {
        /*
        //return 'preso ['.$this->user_id.']';
        $view = ThemeService::getView().'.'.$this->getName();
        $id = request()->input('id');
        $bellboy = BellBoy::find($id);
        //dddx($view);

        return ThemeService::view($view)
            ->with('row', $bellboy);
        */
        return $this->panel->view();
    }

    /**
     * @return mixed
     */
    public function postHandle() {
        $data = request()->all();
        // dddx($data);

        // $bellboy = BellBoy::find($data['id']);
        $bell_boy_id = $data['id'];
        $pivot_data = $data['pivot'];
        $restaurant = Restaurant::query()->find($data['parent_id']);
        $restaurant->bellBoys()->updateExistingPivot($bell_boy_id, $pivot_data);

        \Session::flash('status', 'Operazione eseguita');

        return $this->handle();
    }

    // end handle
}// end EditBellboyAction
