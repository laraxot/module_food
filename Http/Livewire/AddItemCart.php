<?php

declare(strict_types=1);

namespace Modules\Food\Http\Livewire;

use Livewire\Component;
use Modules\LU\Models\User;
use Modules\Xot\Contracts\PanelContract;

/**
 * Class AddItemCart.
 */
class AddItemCart extends Component {
    public int $recipe_id;

    public string $first_name;

    public string $email;

    public int $user_id;

    public bool $updateMode = false;

    public string $message = 'eccomi qui';

    public $rows;

    /**
     * @param PanelContract $recipe_panel
     */
    public function mount($recipe_panel) {
        $this->recipe_id = $recipe_panel->getRow()->id;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $this->rows = User::all();

        return view('food::livewire.add_item_cart');
    }

    private function resetInputFields() {
        $this->first_name = '';
        $this->email = '';
    }

    public function store() {
        $validatedDate = $this->validate([
            'first_name' => 'required',
            'email' => 'required|email',
        ]);

        User::query()->create($validatedDate);

        session()->flash('message', 'Users Created Successfully.');

        $this->resetInputFields();

        $this->emit('userStore'); // Close model to using to jquery
    }

    /**
     * @param int $id
     */
    public function addItemCart($id) {
        /*
        $this->updateMode = true;
        $user = User::where('user_id', $id)->first();

        $this->user_id = $id;
        $this->first_name = $user->first_name;
        $this->email = $user->email;
        */
    }

    public function cancel() {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update() {
        $validatedDate = $this->validate([
            'first_name' => 'required',
            'email' => 'required|email',
        ]);

        if ($this->user_id) {
            $user = User::query()->find($this->user_id);
            $user->update([
                'first_name' => $this->first_name,
                'email' => $this->email,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }

    /**
     * @param int $id
     *
     * @throws \Exception
     */
    public function delete($id) {
        if ($id) {
            User::query()->where('id', $id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}
