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

        $skateboards = \App\Models\Skateboard::factory(20)->create();

        foreach ($skateboards as $skateboard) {
            $skateboard->colors()->sync([rand(1, 3), rand(1, 3)]);
        }
    }
}
