<?php

namespace App\Policies\Tenant;

use App\Models\Tenant\User;

class RestaurantPolicy
{
    public function viewAny(): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->role()->name === 'owner';
    }

    public function update(User $user): bool
    {
        return $user->role()->name === 'owner';
    }

    public function delete(User $user): bool
    {
        return $user->role()->name === 'owner';
    }
}
