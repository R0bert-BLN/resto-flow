<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Tenant;
use App\Models\Tenant\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'admin@restoflow.com',
            'password' => bcrypt('password'),
        ]);

        $tenant = Tenant::factory()->create([
            'name' => 'Demo Food',
            'email' => 'contact@demofood.com',
        ]);

        $tenant->address()->create(Address::factory()->make()->toArray());
    }
}
