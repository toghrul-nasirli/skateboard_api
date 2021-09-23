<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'order' => new OrderResource($this->order),
            'delivery_date' => $this->delivery_date,
            'preparation_date'=> $this->preparation_date,
        ];
    }
}
