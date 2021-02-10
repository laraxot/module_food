<?php

namespace Modules\Food\Contracts;

use Illuminate\Database\Eloquent\Collection;

/**
 * Modules\Food\Contracts\RestaurantContract.
 *
 * @property string|null                    $title
 * @property string|null                    $subtitle
 * @property string|null                    $price
 * @property string|null                    $price_currency
 * @property Collection|BellBoyContract[]   $bellBoys
 */

interface RestaurantContract {
    /*
    public function title(): string;

    public function description(): string;

    public function image($width = null, $height = null): string;

    public function address(): string;

    public function categories(): array;

    public function products(): array;
    */
}
