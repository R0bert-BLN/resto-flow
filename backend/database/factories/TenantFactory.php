<?php

namespace Database\Factories;

use App\Models\Tenant;
use App\Models\Tenant\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Tenant>
 */
class TenantFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }

    public function configure(): Factory|TenantFactory
    {
        return $this->afterCreating(function (Tenant $tenant) {
            $slug = Str::slug($tenant->name, '');

            $tenant->domains()->create([
                'domain' => $slug . '.restoflow.' . env('APP_DOMAIN'),
            ]);
        });
    }
}
