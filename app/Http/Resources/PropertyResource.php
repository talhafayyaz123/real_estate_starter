<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
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
            'property_id' => $this->resource->property_id,
            'description' => $this->resource->description,
            'price' => $this->resource->price,
            'property_image' =>url($this->resource->property_image),
            'property_video' => url($this->resource->property_video),
            'market' => $this->resource->market,
            'city' => $this->resource->city,
            'land' => $this->resource->land,
            'type' => $this->resource->type,
            'area_size' => $this->resource->area_size,
            'bedroom' => $this->resource->bedroom,
            'bathroom' => $this->resource->bathroom,
            'status' => $this->resource->status == 1 ? true : false,
            'user_id' => $this->resource->user_id
        ];
    }
}
