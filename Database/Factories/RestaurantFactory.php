<?php

declare(strict_types=1);

namespace Modules\Food\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/*
 * https://laraveldaily.com/laravel-two-ways-seed-data-relationships/.
 *
 **/
//---- models ----
use Modules\Food\Models\Restaurant as Model;

/**
 * Class RestaurantFactory.
 */
class RestaurantFactory extends Factory {
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
                'title' => 'Restaurant '.$faker->name,
                'subtitle' => $faker->text,
                'image_src' => $faker->imageUrl(400, 400),
                'txt' => $faker->text,
            ],
            //'cuisineCats'
            'website' => $faker->url,
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
            'restaurant_accept_rules' => 1,
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
