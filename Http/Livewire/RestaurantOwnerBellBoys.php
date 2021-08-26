<?php

declare(strict_types=1);

namespace Modules\Food\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Food\Models\Place;
use Modules\Food\Models\Profile;
use Modules\Food\Models\Restaurant;

/**
 * Class RestaurantOwnerBellBoys.
 */
class RestaurantOwnerBellBoys extends Component {
    public $restaurant_id;

    public $place_id;

    public iterable $bell_boys = [];

    public $bell_boy;

    public bool $updateMode = false;

    /**
     * @param array $arr
     *
     * @return \Illuminate\Support\Collection
     */
    public function fix($arr) {
        return collect($arr)->map(
            function ($item) {
                return (object) $item;
            }
        ); //->all();
    }

    /**
     * @param int $id
     */
    public function mount($id) {
        $this->restaurant_id = $id;
        $bell_boys = Restaurant::query()->find($this->restaurant_id)->bellBoys;

        /*
        $this->bell_boys = $bell_boys;
        //dddx($bell_boys);
        */
        foreach ($bell_boys as $bell_boy) {
            $item = [
                'id' => $bell_boy->id,
                'name' => $bell_boy->full_name,
                'status' => $bell_boy->statusHtml,
            ];
            array_push($this->bell_boys, $item);
        }
        //dddx($this->bell_boys);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $this->bell_boys = $this->fix($this->bell_boys);

        return view('food::livewire.restaurant_owner.bell_boys');
    }

    private function resetInputFields() {
        $bell_boys = Restaurant::query()->find($this->restaurant_id)->bellBoys;
        $this->bell_boys = [];
        foreach ($bell_boys as $bell_boy) {
            $item = [
                'id' => $bell_boy->id,
                'name' => $bell_boy->full_name,
                'status' => $bell_boy->statusHtml,
            ];
            array_push($this->bell_boys, $item);
        }
    }

    /**
     * @param int $id
     */
    public function edit($id) {
        $this->updateMode = true;
        $this->bell_boy = Restaurant::query()->find($this->restaurant_id)->bellBoys()->where('bell_boys.id', $id)->first();
    }

    /**
     * @param int $id
     * @param int $status
     */
    public function changeStatus($id, $status) {
        $bell_boy = Restaurant::query()
            ->find($this->restaurant_id)
            ->bellBoys()
            ->where('bell_boys.id', $id)->first()
            ->pivot
            ->update(['status' => $status]);

        $this->resetInputFields();

        $this->updateMode = false;
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
        $profile = Profile::query()->where('auth_user_id', Auth::id())->first();
        $profile->places()->save($place);

        session()->flash('message', 'Place Created Successfully.');

        $this->resetInputFields();

        $this->emit('addPlacesStore'); // Close model to using to jquery
    }
}
