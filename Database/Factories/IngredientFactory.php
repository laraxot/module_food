<?php

declare(strict_types=1);

namespace Modules\Food\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/*
 * https://laraveldaily.com/laravel-two-ways-seed-data-relationships/.
 *
 **/
//---- models ----
use Modules\Food\Models\Ingredient as Model;

/**
 * Class IngredientFactory.
 */
class IngredientFactory extends Factory {
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
            'post' => [
                'title' => ''.$faker->name,
                'subtitle' => $faker->text,
                'image_src' => $faker->imageUrl(400, 400),
                'txt' => $faker->text,
            ],
            'pivot' => [
                'price' => $faker->randomNumber(2),
            ],
        ];
    }
}
