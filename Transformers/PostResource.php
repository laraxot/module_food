<?php

declare(strict_types=1);

namespace Modules\Food\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class PostResource.
 */
class PostResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request) {
        return parent::toArray($request);
    }
}
