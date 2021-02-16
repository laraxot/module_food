<<<<<<< HEAD
<?php
/*
nota bene: gli id indicano l'ordine della root (figli e sottofigli)
*/

if (! isset($route_params)) {
    $route_params = [];
}

$ris = [
    0 => [
        (object) [
            'id' => '1',
            'nome' => 'App Management',
            'visibility' => '1',
            'active' => 0,
            'url' => '#',
            'icon' => '',
        ],
        (object) [
            'id' => '2',
            'nome' => 'Settings',
            //'visibility' => '1',
            //'active' => 0,
            'url' => '#',
            'icon' => '',
        ],
    ],

    1 => [
        (object) [
            'id' => '11',
            'nome' => 'Cuisines',
            //'visibility' => '1',
            //'active' => 0,
            //'routename' => '',
            'container' => 'cuisine',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cuisine', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-globe"></i>',
        ],
        (object) [
            'id' => '12',
            'nome' => 'Restaurants',
            'url' => '#',
            'container' => 'restaurant',
            'icon' => '<i class="nav-icon fa fa-cutlery"></i>',
        ],
        (object) [
            'id' => '13',
            'nome' => 'Categories',
            'url' => '#',
            'container' => 'category',
            'icon' => '<i class="nav-icon fa fa-folder"></i>',
        ],
        (object) [
            'id' => '14',
            'nome' => 'Foods',
            'url' => '#',
            'container' => 'food',
            'icon' => '<i class="nav-icon fa fa-fire"></i>',
        ],
        (object) [
            'id' => '15',
            'nome' => 'Orders',
            'url' => '#',
            'container' => 'order',
            'icon' => '<i class="nav-icon fa fa-shopping-basket"></i>',
        ],
        (object) [
            'id' => '16',
            'nome' => 'Faqs',
            'url' => '#',
            'container' => 'faq',
            'icon' => '<i class="nav-icon fa fa-support"></i>',
        ],
    ],
    2 => [
        (object) [
            'id' => '21',
            'nome' => 'Media Library',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-picture-o"></i>',
        ],
        (object) [
            'id' => '22',
            'nome' => 'Payements',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-credit-card"></i>',
        ],
        (object) [
            'id' => '23',
            'nome' => 'Mobile App Settings',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-mobile"></i>',
        ],
        (object) [
            'id' => '24',
            'nome' => 'Settings',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-cogs"></i>',
        ],
    ],
    12 => [
        (object) [
            'id' => '121',
            'nome' => 'Restaurants',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'restaurant', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-cutlery"></i>',
        ],
        (object) [
            'id' => '122',
            'nome' => 'Galleries',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'photo', 'lang' => 'it']), false //photo o gallery?
            ),
            'icon' => '<i class="nav-icon fa fa-image"></i>',
        ],
        (object) [
            'id' => '123',
            'nome' => 'Restaurant Reviews',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-comments"></i>',
        ],
    ],
    14 => [
        (object) [
            'id' => '141',
            'nome' => 'Foods',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'recipe', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-fire"></i>',
        ],
        (object) [
            'id' => '142',
            'nome' => 'Extra Groups',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-plus-square"></i>',
        ],
        (object) [
            'id' => '143',
            'nome' => 'Extra',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-plus-circle"></i>',
        ],
        (object) [
            'id' => '144',
            'nome' => 'Food Reviews',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-comments"></i>',
        ],
        (object) [
            'id' => '145',
            'nome' => 'Nutrition',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-tasks"></i>',
        ],
    ],
    15 => [
        (object) [
            'id' => '151',
            'nome' => 'Orders',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cart', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-shopping-basket"></i>',
        ],
        (object) [
            'id' => '152',
            'nome' => 'Order Statues',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-server"></i>',
        ],
        (object) [
            'id' => '153',
            'nome' => 'Delivery Addresses',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-map"></i>',
        ],
    ],
    16 => [
        (object) [
            'id' => '161',
            'nome' => 'Faq Categories',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cart', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-folder"></i>',
        ],
        (object) [
            'id' => '162',
            'nome' => 'Faqs',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-question-circle"></i>',
        ],
    ],
    22 => [
        (object) [
            'id' => '221',
            'nome' => 'Payements',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-money"></i>',
        ],
        (object) [
            'id' => '222',
            'nome' => 'Drivers',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-car"></i>',
        ],
        (object) [
            'id' => '223',
            'nome' => 'Earnings',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-money"></i>',
        ],
        (object) [
            'id' => '224',
            'nome' => 'Drivers Payouts',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-dollar"></i>',
        ],
        (object) [
            'id' => '225',
            'nome' => 'Restaurants Payouts',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-dollar"></i>',
        ],
    ],
    23 => [
        (object) [
            'id' => '231',
            'nome' => 'Global Settings',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cart', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-cog"></i>',
        ],
        (object) [
            'id' => '232',
            'nome' => 'Theme',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-pencil"></i>',
        ],
    ],
    24 => [
        (object) [
            'id' => '241',
            'nome' => 'Global Settings',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cart', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-cog"></i>',
        ],
        (object) [
            'id' => '242',
            'nome' => 'Users',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-users"></i>',
        ],
        (object) [
            'id' => '243',
            'nome' => 'Roles & Permissions',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-user-secret"></i>',
        ],
        (object) [
            'id' => '244',
            'nome' => 'Custom Fields',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-list"></i>',
        ],
        (object) [
            'id' => '245',
            'nome' => 'Localisation',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-language"></i>',
        ],
        (object) [
            'id' => '246',
            'nome' => 'Translation',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-language"></i>',
        ],
        (object) [
            'id' => '247',
            'nome' => 'Currencies',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-dollar"></i>',
        ],
        (object) [
            'id' => '248',
            'nome' => 'Payment',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-credit-card"></i>',
        ],
        (object) [
            'id' => '249',
            'nome' => 'Social Authentication',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-globe"></i>',
        ],
        (object) [
            'id' => '250',
            'nome' => 'Push Notifications',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-bell"></i>',
        ],
        (object) [
            'id' => '251',
            'nome' => 'Mail',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-envelope"></i>',
        ],
    ],
    243 => [
        (object) [
            'id' => '2431',
            'nome' => 'Permissions List',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cart', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-circle-o"></i>',
        ],
        (object) [
            'id' => '2432',
            'nome' => 'Create Permission',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-circle-o"></i>',
        ],
        (object) [
            'id' => '2433',
            'nome' => 'Roles List',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-circle-o"></i>',
        ],
        (object) [
            'id' => '2434',
            'nome' => 'Create Role',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-circle-o"></i>',
        ],
    ],
];

return $ris;
=======
<?php
/*
nota bene: gli id indicano l'ordine della root (figli e sottofigli)
*/

if (! isset($route_params)) {
    $route_params = [];
}

$ris = [
    0 => [
        (object) [
            'id' => '1',
            'nome' => 'App Management',
            'visibility' => '1',
            'active' => 0,
            'url' => '#',
            'icon' => '',
        ],
        (object) [
            'id' => '2',
            'nome' => 'Settings',
            //'visibility' => '1',
            //'active' => 0,
            'url' => '#',
            'icon' => '',
        ],
    ],

    1 => [
        (object) [
            'id' => '11',
            'nome' => 'Cuisines',
            //'visibility' => '1',
            //'active' => 0,
            //'routename' => '',
            'container' => 'cuisine',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cuisine', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-globe"></i>',
        ],
        (object) [
            'id' => '12',
            'nome' => 'Restaurants',
            'url' => '#',
            'container' => 'restaurant',
            'icon' => '<i class="nav-icon fa fa-cutlery"></i>',
        ],
        (object) [
            'id' => '13',
            'nome' => 'Categories',
            'url' => '#',
            'container' => 'category',
            'icon' => '<i class="nav-icon fa fa-folder"></i>',
        ],
        (object) [
            'id' => '14',
            'nome' => 'Foods',
            'url' => '#',
            'container' => 'food',
            'icon' => '<i class="nav-icon fa fa-fire"></i>',
        ],
        (object) [
            'id' => '15',
            'nome' => 'Orders',
            'url' => '#',
            'container' => 'order',
            'icon' => '<i class="nav-icon fa fa-shopping-basket"></i>',
        ],
        (object) [
            'id' => '16',
            'nome' => 'Faqs',
            'url' => '#',
            'container' => 'faq',
            'icon' => '<i class="nav-icon fa fa-support"></i>',
        ],
    ],
    2 => [
        (object) [
            'id' => '21',
            'nome' => 'Media Library',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-picture-o"></i>',
        ],
        (object) [
            'id' => '22',
            'nome' => 'Payements',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-credit-card"></i>',
        ],
        (object) [
            'id' => '23',
            'nome' => 'Mobile App Settings',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-mobile"></i>',
        ],
        (object) [
            'id' => '24',
            'nome' => 'Settings',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-cogs"></i>',
        ],
    ],
    12 => [
        (object) [
            'id' => '121',
            'nome' => 'Restaurants',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'restaurant', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-cutlery"></i>',
        ],
        (object) [
            'id' => '122',
            'nome' => 'Galleries',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'photo', 'lang' => 'it']), false //photo o gallery?
            ),
            'icon' => '<i class="nav-icon fa fa-image"></i>',
        ],
        (object) [
            'id' => '123',
            'nome' => 'Restaurant Reviews',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-comments"></i>',
        ],
    ],
    14 => [
        (object) [
            'id' => '141',
            'nome' => 'Foods',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'recipe', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-fire"></i>',
        ],
        (object) [
            'id' => '142',
            'nome' => 'Extra Groups',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-plus-square"></i>',
        ],
        (object) [
            'id' => '143',
            'nome' => 'Extra',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-plus-circle"></i>',
        ],
        (object) [
            'id' => '144',
            'nome' => 'Food Reviews',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-comments"></i>',
        ],
        (object) [
            'id' => '145',
            'nome' => 'Nutrition',
            'url' => '#',
            'icon' => '<i class="nav-icon fa fa-tasks"></i>',
        ],
    ],
    15 => [
        (object) [
            'id' => '151',
            'nome' => 'Orders',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cart', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-shopping-basket"></i>',
        ],
        (object) [
            'id' => '152',
            'nome' => 'Order Statues',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-server"></i>',
        ],
        (object) [
            'id' => '153',
            'nome' => 'Delivery Addresses',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-map"></i>',
        ],
    ],
    16 => [
        (object) [
            'id' => '161',
            'nome' => 'Faq Categories',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cart', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-folder"></i>',
        ],
        (object) [
            'id' => '162',
            'nome' => 'Faqs',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-question-circle"></i>',
        ],
    ],
    22 => [
        (object) [
            'id' => '221',
            'nome' => 'Payements',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-money"></i>',
        ],
        (object) [
            'id' => '222',
            'nome' => 'Drivers',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-car"></i>',
        ],
        (object) [
            'id' => '223',
            'nome' => 'Earnings',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-money"></i>',
        ],
        (object) [
            'id' => '224',
            'nome' => 'Drivers Payouts',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-dollar"></i>',
        ],
        (object) [
            'id' => '225',
            'nome' => 'Restaurants Payouts',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-dollar"></i>',
        ],
    ],
    23 => [
        (object) [
            'id' => '231',
            'nome' => 'Global Settings',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cart', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-cog"></i>',
        ],
        (object) [
            'id' => '232',
            'nome' => 'Theme',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-pencil"></i>',
        ],
    ],
    24 => [
        (object) [
            'id' => '241',
            'nome' => 'Global Settings',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cart', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-cog"></i>',
        ],
        (object) [
            'id' => '242',
            'nome' => 'Users',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-users"></i>',
        ],
        (object) [
            'id' => '243',
            'nome' => 'Roles & Permissions',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-user-secret"></i>',
        ],
        (object) [
            'id' => '244',
            'nome' => 'Custom Fields',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-list"></i>',
        ],
        (object) [
            'id' => '245',
            'nome' => 'Localisation',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-language"></i>',
        ],
        (object) [
            'id' => '246',
            'nome' => 'Translation',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-language"></i>',
        ],
        (object) [
            'id' => '247',
            'nome' => 'Currencies',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-dollar"></i>',
        ],
        (object) [
            'id' => '248',
            'nome' => 'Payment',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-credit-card"></i>',
        ],
        (object) [
            'id' => '249',
            'nome' => 'Social Authentication',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-globe"></i>',
        ],
        (object) [
            'id' => '250',
            'nome' => 'Push Notifications',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-bell"></i>',
        ],
        (object) [
            'id' => '251',
            'nome' => 'Mail',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-envelope"></i>',
        ],
    ],
    243 => [
        (object) [
            'id' => '2431',
            'nome' => 'Permissions List',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'cart', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-circle-o"></i>',
        ],
        (object) [
            'id' => '2432',
            'nome' => 'Create Permission',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-circle-o"></i>',
        ],
        (object) [
            'id' => '2433',
            'nome' => 'Roles List',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-circle-o"></i>',
        ],
        (object) [
            'id' => '2434',
            'nome' => 'Create Role',
            'url' => route('admin.container0.index',
                array_merge($route_params, ['container0' => 'metatag', 'lang' => 'it']), false
            ),
            'icon' => '<i class="nav-icon fa fa-circle-o"></i>',
        ],
    ],
];

return $ris;
>>>>>>> a6dde0f (first)
