<?php

namespace Modules\Food\Http\Livewire;

use Livewire\Component;
use Modules\Food\Models\BellBoy;

/**
 * Class ChangeStatusBellBoy.
 */
class ChangeStatusBellBoy extends Component {
    public int $bellboy_id;
    //public $status;

    public string $message = 'Hello World!';

    /**
     * @param int $bellboy_id
     */
    public function mount($bellboy_id) {
        //$this->row = $row;
        $this->bellboy_id = $bellboy_id;
        //$this->status = $row->status;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        return view('food::livewire.change_status_bell_boy');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|BellBoy|BellBoy[]|null
     */
    public function getBellboyProperty() {
        return BellBoy::query()->find($this->bellboy_id);
    }
}