<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateDeliveryRequest;
use App\Http\Resources\DeliveryResource;
use App\Http\Resources\OrderResource;
use App\Models\Delivery;
use App\Models\Order;
use App\Traits\ApiResponser;

class OrderController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $orders = Order::with('product', 'color')->latest()->paginate(10);

        return OrderResource::collection($orders);
    }

    public function store(StoreOrderRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('custom_print_photo')) {
            $data['custom_print_photo'] = _storeFile('public/orders/', $request->custom_print_photo);
        }

        $order = Order::create($data);

        return $this->success(new OrderResource($order), 'Sifariş qeydə alındı!');
    }

    public function delivery(Order $order, UpdateDeliveryRequest $request)
    {
        Delivery::firstWhere('order_id', $order->id)->update([
            'delivery_date' => $request->delivery_date,
            'preparation_date' => $request->preparation_date,
        ]);

        $delivery = Delivery::with('order')->firstWhere('order_id', $order->id);
    
        return $this->success(new DeliveryResource($delivery), 'Tarix təyin edildi!');
    }
}
