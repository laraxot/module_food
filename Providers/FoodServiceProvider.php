<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Food\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Class FoodServiceProvider.
 */
class FoodServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    protected string $module_base_ns = 'Modules\Food';

    public string $module_name = 'food';

    public function bootCallback(): void {
        $this->loadEventsFrom(__DIR__.'/../Events'); //lo carico solo dove serve se no va a fare un sacco di letture

        //$this->commands([
        //\Modules\Food\Console\CreateProfileCommand::class,
        //\Modules\LU\Console\CreateAreasCommand::class,
        //]);
        $this->registerLivewireComponents();
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Food\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Class FoodServiceProvider.
 */
class FoodServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    protected string $module_base_ns = 'Modules\Food';

    public string $module_name = 'food';

    public function bootCallback(): void {
        $this->loadEventsFrom(__DIR__.'/../Events'); //lo carico solo dove serve se no va a fare un sacco di letture

        //$this->commands([
        //\Modules\Food\Console\CreateProfileCommand::class,
        //\Modules\LU\Console\CreateAreasCommand::class,
        //]);
        $this->registerLivewireComponents();
    }
}
>>>>>>> a6dde0f (first)
