<?php

declare(strict_types=1);

use Modules\Extend\Services\RouteService;

$namespace = $this->getNamespace().'\Controllers\Admin';

$item0 = [
    'name' => 'Food',
    'param_name' => '',
    'subs' => [
        [
            'name' => 'Restaurant',
            'subs' => [
                [
                    'name' => 'cuisine',
                    'prefix' => 'cuisine',
                    'namespace' => null,
                    'as' => 'cuisine.',
                    'controller' => 'CuisineController',
                ], //end sub_n
                [
                    'name' => 'recipe',
                    'prefix' => 'recipe',
                    'namespace' => null,
                    'as' => 'recipe.',
                    'controller' => 'RecipeController',
                ], //end sub_n
            ], //end subs
        ], //end subs
        [
            'name' => 'Location',
        ], //end sub_n
        [
            'name' => 'MailTemplate',
        ], //end sub_n
    ], //end subs
];

$areas_prgs = [
    $item0,
];

Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['web', 'auth'],
        'namespace' => $namespace,
    ],
    function () use ($areas_prgs, $namespace) {
        RouteService::dynamic_route($areas_prgs, null, $namespace);
    }
);
