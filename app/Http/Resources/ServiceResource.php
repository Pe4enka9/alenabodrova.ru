<?php

namespace App\Http\Resources;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Service
 */
class ServiceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'specialization' => new SpecializationResource($this->specialization),
            'subcategory_id' => $this->subcategory_id,
            'length_id' => $this->length_id,
            'price' => $this->price,
            'additionally' => $this->additionally,
        ];
    }
}
