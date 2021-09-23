<?php

namespace App\Observers;

use App\Models\Delivery;
use App\Models\Order;

class OrderObserver
{
    public function created(Order $order)
    {
        Delivery::create([
            'order_id' => $order->id,
        ]);
    }
}
