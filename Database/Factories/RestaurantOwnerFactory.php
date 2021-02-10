<?php

namespace Modules\Food\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//---- models ----
use Modules\Food\Models\RestaurantOwner as Model;

/**
 * Class RestaurantOwnerFactory
 * @package Modules\Food\Database\Factories
 */
class RestaurantOwnerFactory extends Factory {
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
            //'title' => $faker->sentence,
            //'description' => $faker->paragraph,
            //'user_id' => factory('App\User')->create()->id,
            //'post'=>factory(Post::class)->raw(),
        ];
    }
}
