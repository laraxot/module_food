<?php

declare(strict_types=1);

namespace Modules\Food\Http\Livewire;

use Auth;
use Livewire\Component;
use Modules\Geo\Models\Place;
use Modules\Food\Models\Profile;
use Modules\Food\Models\Restaurant;

/**
 * Class RestaurantOwnerCarts.
 */
class RestaurantOwnerCarts extends Component {
    public $restaurant_id;

    public $carts;

    public $route;

    public $updateMode;

    public $place;

    public $place_id;

    public $street_number;

    public $locality;

    public $administrative_area_level_2;

    public $postal_code;

    public $country;

    /**
     * @param int $id
     */
    public function mount($id) {
        $this->restaurant_id = $id;
        $this->carts = Restaurant::query()->find($this->restaurant_id)->carts;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        return view('food::livewire.restaurant_owner.carts');
    }

    private function resetInputFields() {
        $this->route = '';
    }

    /**
     * @param int $id
     */
    public function edit($id) {
        $this->updateMode = true;

        $this->place = Place::query()->where('id', $id)->first();

        $this->place_id = $id;

        $this->route = $this->place->route;
        $this->street_number = $this->place->street_number;
        $this->locality = $this->place->locality;
        $this->administrative_area_level_2 = $this->place->administrative_area_level_2;
        $this->postal_code = $this->place->postal_code;
        $this->country = $this->place->country;
    }

    public function cancel() {
        $this->updateMode = false;

        $this->resetInputFields();
    }

    public function update() {
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
    }

    /**
     * @param int $id
     *
     * @throws \Exception
     */
    public function delete($id) {
        if ($id) {
            Place::query()->where('id', $id)->delete();

            session()->flash('message', 'Users Deleted Successfully.');
        }
    }

    public function store() {
        $validatedData = $this->validate([
            'route' => 'required',
            'street_number' => 'required',
            'locality' => 'required',
            'postal_code' => 'required',
            'administrative_area_level_2' => 'required',
            'country' => 'required',
        ]);

        $place = Place::query()->create($validatedData);

        //\Auth::user()->profile->places()->save($place);
        $profile = Profile::query()->where('user_id', Auth::id())->first();
        $profile->places()->save($place);

        session()->flash('message', 'Place Created Successfully.');

        $this->resetInputFields();

        $this->emit('addPlacesStore'); // Close model to using to jquery
    }
}
