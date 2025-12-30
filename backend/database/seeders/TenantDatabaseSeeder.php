<?php

namespace Database\Seeders;

use App\Models\Tenant\Restaurant;
use App\Models\Tenant\Role;
use App\Models\Tenant\User;
use Illuminate\Database\Seeder;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $managerRole = Role::create(['name' => 'manager']);
        $waiterRole = Role::create(['name' => 'waiter']);
        $chefRole = Role::create(['name' => 'chef']);
        $ownerRole = Role::create(['name' => 'owner']);

        $roles = [$managerRole, $waiterRole, $chefRole, $ownerRole];

        $restaurant = Restaurant::factory()->create([
            'name' => 'Demo Food Craiova',
        ]);

        foreach ($roles as $role) {
            $user = User::factory()->create([
                'password' => bcrypt('password'),
                'role_id' => $role->id,
            ]);

            $user->restaurants()->attach($restaurant->id);
        }
    }
}
