<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run()
    {
        Type::create([
            'name' => 'Oldschool',
        ]);
        Type::create([
            'name' => 'Penny',
        ]);
        Type::create([
            'name' => 'Cruiser',
        ]);
    }
}
