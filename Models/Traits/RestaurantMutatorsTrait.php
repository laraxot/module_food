<?php

namespace Modules\Food\Models\Traits;

use Carbon\Carbon;

/**
 * Modules\Food\Models\Restaurant.
 *
 * @property int                                                                             $id
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\RestaurantOwner[] $restaurantOwners
 */
trait RestaurantMutatorsTrait {
    /**
     * @param mixed $value
     * @return bool
     */
    public function getIsOpenAttribute($value) {
        $now = Carbon::now('Europe/Rome'); // da mettere solo dentro config/app.php e hai risolto..
        $day_of_week = $now->dayOfWeek;
        $openingHours = $this->openingHours
                            ->where('day_of_week', $day_of_week)
                            ->where('is_closed', false);
        foreach ($openingHours as $hour) {
            if ($now->between($hour->open_at, $hour->close_at)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param mixed $value
     * @return int
     */
    public function getIsReclamedAttribute($value) {
        if ($this->restaurantOwners->count()) {
            $value = 1;
        } else {
            $value = 0;
        }
        $this->is_reclamed = $value;
        $this->save();

        return $value;
    }

    /*
    public function setAddressAttribute($value) {
       if ('' != $value) {
           $json = json_decode($value);
           $json->latitude = $json->latlng->lat;
           $json->longitude = $json->latlng->lng;
           unset($json->latlng);
           $value = $json->value;
           unset($json->value);
           //ddd($json);
           //$data = ImportService::getAddressFields(['address' => $value]);
           $data = get_object_vars($json);
           $data['address'] = $value;
           $this->attributes = array_merge($this->attributes, $data);
       }
    }
    */
}
