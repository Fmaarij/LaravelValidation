<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goldenbook>
 */
class GoldenbookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'A_nom'=>fake()->name(),
            'A_text'=>fake()->sentence(),
            'A_note'=>fake()->numberBetween(1,5),
            'A_img'=>fake()->imageUrl()
        ];
    }
}
