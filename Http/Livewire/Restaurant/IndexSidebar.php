<?php

declare(strict_types=1);

namespace Modules\Food\Http\Livewire\Restaurant;

use Livewire\Component;
use Modules\Xot\Services\PanelService;

/**
 * Modules\Food\Http\Livewire\Restaurant\IndexSidebar.
 *
 * @property \Modules\Xot\Models\Panels\XotBasePanel $panel
 */
class IndexSidebar extends Component {
    // public $route_params = [];
    // public $data = [];

    // public $searchTerm;
    /*
    public function mount() {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
    }

    public function getPanelProperty() {
        return  PanelService::make()->getByParams($this->route_params);
    }

    public function query() {
        return $this->panel->rows($this->data);
    }
    */

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $view = 'food::livewire.restaurant.index.sidebar';
        $view_params = [
            'view' => $view,
            // 'rows' => $this->query()->paginate(20),
            // '_panel' => $this->panel,
        ];

        return view($view, $view_params);
    }
}
