<?php

declare(strict_types=1);

namespace Modules\Food\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//---- models ----
use Modules\Food\Models\Profile as Model;

/**
 * Class ProfileFactory.
 */
class ProfileFactory extends Factory {
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
            //'user_id' => factory(User::class)->create()->user_id,
            'user' => [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'handle' => $faker->userName,
                'passwd' => $faker->password,
            ],
            'post' => [
                'image_src' => $faker->imageUrl(640, 480),
                'txt' => $faker->text(400),
            ],
            //'privacies'
        ];
    }
}
