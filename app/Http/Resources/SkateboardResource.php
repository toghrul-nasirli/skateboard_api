<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkateboardResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'type' => new TypeResource($this->whenLoaded('type')),
            'colors' => ColorResource::collection($this->whenLoaded('colors')),
            'price' => $this->price,
            'custom_print_price' => $this->custom_print_price,
        ];
    }
}
