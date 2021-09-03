<?php

declare(strict_types=1);

namespace Modules\Food\Contracts;

use Illuminate\Database\Eloquent\Collection;

/**
 * Modules\Food\Contracts\PivotContract.
 *
 * @property string|null                    $title
 * @property string|null                    $subtitle
 * @property string|null                    $price
 * @property string|null                    $price_currency
 * @property int|null                       $status
 * @property Collection|ProductContract[]   $products
 * @property Collection|ChangeCatContract[] $changeCats
 * @property int|null                       $customer_id
 */
interface PivotContract {
}
