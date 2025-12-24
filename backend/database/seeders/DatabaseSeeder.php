<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Role;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);

        User::factory()->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@restoflow.com',
            'password' => bcrypt('password'),
            'role_id' => $adminRole->id,
        ]);

        $tenant = Tenant::factory()->create([
            'name' => 'Demo Food',
            'email' => 'contact@demofood.com',
        ]);

        $tenant->address()->create(Address::factory()->make()->toArray());
    }
}
