<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skateboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'name',
        'price',
        'custom_print_price',
    ];

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
