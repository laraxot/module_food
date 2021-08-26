<?php

declare(strict_types=1);

namespace Modules\Food\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//---- models ----
use Modules\Food\Models\BellBoy as Model;

/**
 * Class BellBoyFactory.
 */
class BellBoyFactory extends Factory {
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
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'phone' => $faker->phoneNumber,
            'email' => $faker->email,
            'note' => $faker->text,
            'created_by' => 'tester',
            'updated_by' => 'tester',
            //'vehicle_type' => $faker->vehicle_type,
            //'driving_license' => $faker->driving_license,
            //'has_car' => $faker->has_car,
            //'has_motorcycle' => $faker->has_motorcycle,
            //'has_bicycle' => $faker->has_bicycle,
            //'vehicle_model' => $faker->vehicle_model,
            /*
        "driving_license" => "0",
        "has_car" => "0",
        "has_motorcycle" => "0",
        "has_bicycle" => "0",
        "vehicle_model" => null
        */
        ];
    }
}
