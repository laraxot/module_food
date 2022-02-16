<?php

declare(strict_types=1);

namespace Modules\Food\Http\Livewire\Restaurant;

use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Modules\Xot\Services\PanelService;

/**
 * Modules\Food\Http\Livewire\Restaurant\IndexItem.
 *
 * @property \Modules\Xot\Models\Panels\XotBasePanel $panel
 */
class IndexItem extends Component {
    public array $route_params = [];

    public array $data = [];

    //public $row_panel;

    public $row;

    /**
     * @param object $row
     */
    public function mount($row) {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        $this->row = $row;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response|mixed|null
     */
    public function getPanelProperty() {
        return  PanelService::make()->getByParams($this->route_params);
    }

    /**
     * @return Builder
     */
    public function query() {
        return $this->panel->rows($this->data);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $view = 'food::livewire.restaurant.index.item';
        $view_params = [
            'view' => $view,
            'row_panel' =>  PanelService::make()->get($this->row)->setBrother($this->panel),
            //'rows' => $this->query()->paginate(20),
            //'_panel' => $this->panel,
        ];

        return view($view, $view_params);
    }
}