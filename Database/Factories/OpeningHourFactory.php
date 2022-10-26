<?php

declare(strict_types=1);

namespace Modules\Food\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// ---- models ----
use Modules\Food\Models\OpeningHour as Model;

/**
 * Class OpeningHourFactory.
 */
class OpeningHourFactory extends Factory {
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
        $values = [];
        $day_names = [
            0 => 'Domenica',
            1 => 'Lunedì',
            2 => 'Martedì',
            3 => 'Mercoledì',
            4 => 'Giovedì',
            5 => 'Venerdì',
            6 => 'Sabato',
        ];
        $is_closed = rand(0, 6);

        for ($i = 0; $i < 7; ++$i) {
            if ($i == $is_closed) {
                $tmp = true;
            } else {
                $tmp = false;
            }
            $values[$i] = [
                'day_name' => $day_names[$i],
                'day_of_week' => $i,
                'open_at' => $faker->time($format = 'H:i:s', $max = '24'),
                'close_at' => $faker->time($format = 'H:i:s', $max = '24'),
                'is_closed' => $tmp,
                'note' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            ];
        }

        return $values;
    }
}
