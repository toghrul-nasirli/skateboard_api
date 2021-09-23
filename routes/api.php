<?php

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\API\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index']);
Route::post('/order', [OrderController::class, 'store']);
Route::put('/orders/{order}/delivery', [OrderController::class, 'delivery']);