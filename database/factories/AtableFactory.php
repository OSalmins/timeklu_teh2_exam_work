<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Table_kind;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Atable>
 */
class AtableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->word(),
            'price'=>fake()->numberBetween(50,1000),
            'seller_id'=>fake()->numberBetween(1,100),
            'description'=>fake()->realtext(300),
            'table_kind_id'=>Table_kind::inRandomOrder()->first()->id,

        ];
    }
    
}
