<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CondosByCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title' => $this->resource->title,
            'description' => $this->resource->description,
            'location' => $this->resource->location,
            'price' => $this->resource->price,
            'occupency' => $this->resource->occupency,
            'area_size' => $this->resource->area_size,
            'category' => $this->resource->category,
            'uuid' => $this->resource->uuid,
        ];
    }
}
