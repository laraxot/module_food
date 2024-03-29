<?php

declare(strict_types=1);

namespace Modules\Food\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// ---- models ----
use Modules\Food\Models\Location as Model;

/**
 * Class LocationFactory.
 */
class LocationFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        $faker = $this->faker;

        return [
            // 'title' => $faker->sentence,
            // 'description' => $faker->paragraph,
            // 'user_id' => factory(User::class)->create()->user_id,
            'latitude' => $faker->latitude,
            'longitude' => $faker->longitude,
            'route' => $faker->streetName,
            'country' => $faker->country,
            'street_number' => $faker->buildingNumber,
            'postal_code' => $faker->postcode,
            'locality' => $faker->city,
            'formatted_address' => $faker->streetAddress,
        ];
    }
}
