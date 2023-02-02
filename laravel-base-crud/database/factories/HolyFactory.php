<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Holy>
 */
class HolyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> firstName(), 
            'surname' => fake() -> lastName(), 
            'blessing_date' => fake() -> dateTimeBetween('-1 week', '+1 week'), 
            'num_miracles' => fake() -> randomDigit(), 
        ];
    }
}
