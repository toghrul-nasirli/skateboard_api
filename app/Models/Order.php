<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'color_id',
        'amount',
        'custom_print_photo',
        'email',
        'photo',
        'address',
    ];
}
