<?php

namespace Modules\Food\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;


/**
 * Class LocationCollection
 * @package Modules\Food\Transformers
 */
class LocationCollection extends ResourceCollection {
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request) {
        //return parent::toArray($request);
        return [
            'data' => $this->collection, // non si puo' cambiare il nome della var data
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
