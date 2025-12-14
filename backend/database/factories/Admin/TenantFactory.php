<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            $slug = Str::slug($tenant->name);
            $tenant->domains()->create([
                'domain' => $slug . '.api.lvh.me',
            ]);
        });
    }
}
