<?php

namespace App\Listeners\Tenant;

use Illuminate\Support\Facades\Config;

class TenantAuthListener
{
    public function handle(): void
    {
        Config::set('auth.guards.web.provider', 'tenant_users');
        Config::set('auth.passwords.users.provider', 'tenant_users');
    }
}
