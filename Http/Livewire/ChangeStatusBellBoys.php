<?php

declare(strict_types=1);

namespace Modules\Food\Http\Livewire;

use Livewire\Component;
use Modules\LU\Models\User;
use Modules\Xot\Contracts\ModelContract;

/**
 * Class ChangeStatusBellBoys.
 */
class ChangeStatusBellBoys extends Component {
    public ModelContract $bell_boy;

    public int $status;

    public $row;

    public $first_name;

    public $email;

    public $user_id;

    public bool $updateMode = false;

    /**
     * @param ModelContract $bell_boy
     */
    public function mount($bell_boy) {
        $this->bell_boy = $bell_boy;
        $this->status = $bell_boy->pivot->status;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        return view('food::livewire.change_status_bell_boys');
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
    public function edit($id) {
        $this->updateMode = true;
        $user = User::query()->where('auth_user_id', $id)->first();

        $this->user_id = $id;
        $this->first_name = $user->first_name;
        $this->email = $user->email;
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
