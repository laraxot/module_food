<?php

declare(strict_types=1);

namespace Modules\Food\Transformers;

/*
* https://medium.com/@dinotedesco/using-laravel-5-5-resources-to-create-your-own-json-api-formatted-api-2c6af5e4d0e8
* https://jsonapi.org/
**/

//use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

/**
 * Class RestaurantResource.
 */
class RestaurantResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request) {
        $attributes = parent::toArray($request);
        /*
        return [
            'type'          => $this->post_type,
            'id'            => (string)$this->id,
            'attributes'    => $attributes,
            'links'         => [
                //'self' => route('articles.show', ['article' => $this->id]),
            ],
        ];
        */
        return $attributes;
    }
}
