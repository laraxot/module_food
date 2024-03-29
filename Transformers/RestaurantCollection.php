<?php

declare(strict_types=1);

namespace Modules\Food\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Class RestaurantCollection.
 */
class RestaurantCollection extends ResourceCollection {
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request) {
        // return parent::toArray($request);
        return [
            'data' => $this->collection, // non si puo' cambiare il nome della var data
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
