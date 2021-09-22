<?php

namespace Database\Factories;

use App\Models\Skateboard;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkateboardFactory extends Factory
{
    protected $model = Skateboard::class;

    public function definition()
    {
        return [
            'type_id' => 1,
            'name' => $this->faker->name,
            'price' => $this->faker->randomDigitNotNull,
            'custom_print_price' => $this->faker->randomDigit,
        ];
    }
}
