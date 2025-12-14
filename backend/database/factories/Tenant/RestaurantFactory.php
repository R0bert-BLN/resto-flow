<?php

namespace Database\Factories\Tenant;

use App\Models\Tenant\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company() . ' Restaurant',
            'description' => $this->faker->sentence(10),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
