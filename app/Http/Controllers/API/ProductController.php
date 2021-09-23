<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkateboardResource;
use App\Models\Skateboard;

class ProductController extends Controller
{
    public function index()
    {
        $skateboards = Skateboard::with('type', 'colors')->paginate(15);

        return SkateboardResource::collection($skateboards);
    }
}
