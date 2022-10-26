<?php

declare(strict_types=1);

namespace Modules\Food\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Xot\Models\Widget;

class WidgetFoodTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Widget::truncate();

        $widgets = [
            [
                'layout_position' => '',
                'post_type' => 'home',
                'post_id' => 1,
                'title' => 'hero',
                'blade' => 'hero',
                'image_src' => '',
                'pos' => 1,
                'model' => '',
                'limit' => 0,
                'order_by' => '',
            ],
            [
                'layout_position' => '',
                'post_type' => 'home',
                'post_id' => 1,
                'title' => 'city_search',
                'blade' => 'city_search',
                'image_src' => '',
                'pos' => 2,
                'model' => '',
                'limit' => 0,
                'order_by' => '',
            ],
            [
                'layout_position' => '',
                'post_type' => 'home',
                'post_id' => 1,
                'title' => 'cities',
                'blade' => 'cities',
                'image_src' => '',
                'pos' => 3,
                'model' => '',
                'limit' => 0,
                'order_by' => '',
            ],
            [
                'layout_position' => '',
                'post_type' => 'home',
                'post_id' => 1,
                'title' => 'steps',
                'blade' => 'steps',
                'image_src' => '',
                'pos' => 4,
                'model' => '',
                'limit' => 0,
                'order_by' => '',
            ],
            [
                'layout_position' => '',
                'post_type' => 'home',
                'post_id' => 1,
                'title' => 'popular',
                'blade' => 'popular',
                'image_src' => '',
                'pos' => 5,
                'model' => '',
                'limit' => 0,
                'order_by' => '',
            ],
            [
                'layout_position' => 'headernav',
                'post_type' => 'home',
                'post_id' => 1,
                'title' => 'add_restaurant',
                'blade' => 'add_restaurant',
                'image_src' => '',
                'pos' => 11,
                'model' => '',
                'limit' => 0,
                'order_by' => '',
            ],
            [
                'layout_position' => 'profile_dropdown',
                'post_type' => 'home',
                'post_id' => 1,
                'title' => 'profile_food',
                'blade' => 'food',
                'image_src' => '',
                'pos' => 12,
                'model' => '',
                'limit' => 0,
                'order_by' => '',
            ],
            [
                'layout_position' => '	profile_page',
                'post_type' => 'home',
                'post_id' => 1,
                'title' => 'profile_food',
                'blade' => 'profile_food',
                'image_src' => '',
                'pos' => 13,
                'model' => '',
                'limit' => 0,
                'order_by' => '',
            ],
            [
                'layout_position' => '',
                'post_type' => 'home',
                'post_id' => 1,
                'title' => 'become_bell_boy',
                'blade' => 'become_bell_boy',
                'image_src' => '',
                'pos' => 14,
                'model' => '',
                'limit' => 0,
                'order_by' => '',
            ],
        ];

        foreach ($widgets as $widget) {
            // DB::table('widgets')->insert($widget);
            Widget::firstOrCreate($widget);
        }
    }
}
