<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'product' => new SkateboardResource($this->product),
            'color' => new ColorResource($this->color),
            'amount' => $this->amount,
            'custom_print_photo' => asset('uploads/orders/' . $this->custom_print_photo),
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'order_time' => $this->created_at->format('d-m-Y H:i'),
        ];
    }
}
