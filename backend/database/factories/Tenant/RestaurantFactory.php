<?php

namespace Database\Factories\Tenant;

use App\Models\Tenant\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Restaurant>
 */
class RestaurantFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company() . ' RestaurantResource',
            'description' => $this->faker->sentence(10),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
