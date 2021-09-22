<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ColorSeeder::class,
            TypeSeeder::class,
        ]);
        
        \App\Models\Skateboard::factory(20)->create();
    }
}
