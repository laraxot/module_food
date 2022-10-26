<?php

declare(strict_types=1);

namespace Modules\Food\Http\Livewire\Restaurant;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Xot\Models\Panels\XotBasePanel;
use Modules\Xot\Services\PanelService;

/**
 * Modules\Food\Http\Livewire\Restaurant\Index.
 *
 * @property XotBasePanel $panel
 */
class Index extends Component {
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    public array $route_params = [];

    public array $data = [];

    public $searchTerm;
    protected Collection $rows;

    public function mount() {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
        // $this->rows = $this->panel->rows($this->data)->limit(100)->get();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response|mixed|null
     */
    public function getPanelProperty() {
        return PanelService::make()->getByParams($this->route_params);
    }

    /**
     * @param array $params
     *
     * @return Builder
     */
    public function query($params = []) {
        $data = array_merge($this->data, $params);

        return $this->panel->rows($data);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $view = 'food::livewire.restaurant.index';
        $query_params = ['q' => $this->searchTerm];
        // $query_params = [];
        $rows = $this->query($query_params)->paginate(20);
        /*
        $rows = $this->rows->whereHas('post', function ($query) {
            $query->where('title', 'like', '%'.$this->searchTerm.'%');
        })->paginate(20);
        */
        /*
        $perPage = 10;
        $collection = $this->rows;
        $items = $collection->forPage(1, $perPage);
        $paginator = new LengthAwarePaginator($items, $collection->count(), $perPage, 1);
        */
        // $rows = $this->rows;
        $view_params = [
            'view' => $view,
            'rows' => $rows,
            '_panel' => $this->panel,
        ];

        return view($view, $view_params);
    }
}
