<?php

namespace App\Policies\Tenant;

use App\Models\Tenant\Menu;
use App\Models\Tenant\User; // Asigură-te că e User-ul de Tenant
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $this->hasManagerPrivileges($user);
    }

    public function update(User $user, Menu $menu): bool
    {
        return $this->hasManagerPrivileges($user);
    }

    public function delete(User $user, Menu $menu): bool
    {
        return $this->hasManagerPrivileges($user);
    }

    private function hasManagerPrivileges(User $user): bool
    {
        return in_array($user->role?->name, ['owner', 'manager']);
    }
}
