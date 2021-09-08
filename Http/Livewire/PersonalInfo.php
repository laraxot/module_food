<?php

declare(strict_types=1);

namespace Modules\Food\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Modules\Food\Models\Profile;
use Modules\Xot\Http\Livewire\XotBaseComponent;

/**
 * Class Places.
 */
class PersonalInfo extends XotBaseComponent {
    public Profile $profile;

    public function mount(Profile $profile): void {
        $this->profile = $profile;
    }

    public function render(): Renderable {
        $view = $this->getView();

        return view()->make($view);
    }

    /*
    private function resetInputFields() {
        //$this->route = '';
    }
    */

    public function edit(int $id): void {
        /*

        $this->updateMode = true;

        $this->place = Place::query()->where('id', $id)->first();

        $this->place_id = $id;

        $this->route = $this->place->route;
        $this->street_number = $this->place->street_number;
        $this->locality = $this->place->locality;
        $this->administrative_area_level_2 = $this->place->administrative_area_level_2;
        $this->postal_code = $this->place->postal_code;
        $this->country = $this->place->country;
         */
    }

    public function cancel(): void {
        /*
        $this->updateMode = false;
        $this->resetInputFields();
         */
    }

    public function update(): void {
        /*
        $validatedData = $this->validate([
            'route' => 'required',
            'street_number' => 'required',
            'locality' => 'required',
            'postal_code' => 'required',
            'administrative_area_level_2' => 'required',
            'country' => 'required',
        ]);

        if ($this->place_id) {
            $place = Place::query()->find($this->place_id);

            $place->update($validatedData);

            $this->updateMode = false;

            session()->flash('message', 'Place Updated Successfully.');

            $this->resetInputFields();

            $this->emit('editPlaces');
        }
        */
    }

    /**
     * @throws \Exception
     */
    public function delete(int $id): void {
        /*
        if ($id) {
            Place::query()->where('id', $id)->delete();

            session()->flash('message', 'Users Deleted Successfully.');
        }
        */
    }

    public function store(): void {
        /*
        $validatedData = $this->validate([
            'route' => 'required',
            'street_number' => 'required',
            'locality' => 'required',
            'postal_code' => 'required',
            'administrative_area_level_2' => 'required',
            'country' => 'required',
        ]);

        $place = Place::query()->create($validatedData);
        $profile = Profile::query()->where('auth_user_id', Auth::id())->first();
        $profile->places()->save($place);
        //\Auth::user()->profile->places()->save($place);

        session()->flash('message', 'Place Created Successfully.');

        $this->resetInputFields();

        $this->emit('addPlacesStore'); // Close model to using to jquery
        */
    }
}
