<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Resources\SkateboardResource;
use App\Models\Order;
use App\Models\Skateboard;

class ProductController extends Controller
{
    public function index()
    {
        $skateboards = Skateboard::with('type', 'colors')->paginate(15);

        return SkateboardResource::collection($skateboards);
    }

    public function order(StoreOrderRequest $request)
    {
        try {
            Order::create($request->validated());

            return response()->json(['success' => 'Sifariş qeydə alındı!']);
        } catch (\Exception $error) {
            return response()->json(['error' => $error]);
        }
    }
}
