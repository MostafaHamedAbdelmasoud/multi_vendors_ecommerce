<?php

namespace Modules\CouponProducts\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Modules\CouponProducts\Entities\Country */
class SelectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'text' => $this->name,
            'image' => $this->getFirstMediaUrl('stores'),
        ];
    }
}
