<?php

declare(strict_types=1);

namespace Modules\Food\Transformers;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

/**
 * Class PostResource.
 */
class PostResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request) {
        return parent::toArray($request);
    }
}
