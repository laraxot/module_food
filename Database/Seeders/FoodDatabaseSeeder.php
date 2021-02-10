<?php

namespace Modules\Food\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * Class FoodDatabaseSeeder.
 */
class FoodDatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run() {
        Model::unguard();

        $this->call(WidgetFoodTableSeeder::class);
    }
}
