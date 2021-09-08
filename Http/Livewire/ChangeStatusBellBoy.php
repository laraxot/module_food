<?php

declare(strict_types=1);

namespace Modules\Food\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Modules\Food\Models\BellBoy;

/**
 * Class ChangeStatusBellBoy.
 */
class ChangeStatusBellBoy extends Component {
    public int $bellboy_id;
    //public $status;

    public string $message = 'Hello World!';

    public function mount(int $bellboy_id): void {
        //$this->row = $row;
        $this->bellboy_id = $bellboy_id;
        //$this->status = $row->status;
    }

    public function render(): Renderable {
        $view = 'food::livewire.change_status_bell_boy';

        return view()->make($view);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|BellBoy|BellBoy[]|null
     */
    public function getBellboyProperty() {
        return BellBoy::query()->find($this->bellboy_id);
    }
}
