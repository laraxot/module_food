<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class EditBellBoyAction.
 */
class EditBellBoyAction extends XotBasePanelAction {
    public bool $onItem = true; // onlyContainer

    public bool $onContainer = false; // onlyContainer
    // mettere freccette su e giù

    public string $icon = '<i class="fa fa-edit"></i>';

    /**
     * @return mixed
     */
    public function handle() {
        $view = 'pub_theme::restaurant.modal.'.$this->getName();

        return ThemeService::view($view)
            ->with('row', $this->row);
    }

    // end handle

    /**
     * @return mixed
     */
    public function postHandle() {
        $data = request()->all();
        // dddx($data);
        $bellboy = $this->row;

        [$containers, $items] = params2ContainerItem();
        $restaurant = $items[0];
        $bellboy->restaurants()->updateExistingPivot($restaurant, ['status' => $data['status'], 'note' => $data['note']]);

        \Session::flash('status', 'Operazione eseguita');

        $view = 'pub_theme::restaurant.modal.'.$this->getName().'_thanks';
        // dddx($view);

        return ThemeService::view($view)
            ->with('row', $this->row);
    }
}// end EditBellboyAction
