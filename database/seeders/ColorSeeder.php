<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    public function run()
    {
        Color::create([
            'name' => 'qara',
            'hex_code' => '#000',
        ]);
        Color::create([
            'name' => 'ağ',
            'hex_code' => '#fff',
        ]);
        Color::create([
            'name' => 'boz',
            'hex_code' => '#eee',
        ]);
    }
}
