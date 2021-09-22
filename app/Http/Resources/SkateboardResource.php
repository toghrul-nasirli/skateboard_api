<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkateboardResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'type' => new TypeResource($this->type),
            'colors' => ColorResource::collection($this->colors),
            'price' => $this->price,
            'custom_print_price' => $this->custom_print_price,
        ];
    }
}
