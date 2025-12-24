<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Config;
use Stancl\Tenancy\Events\TenancyInitialized;

class TenantAuthListener
{
    public function handle(): void
    {
        Config::set('auth.guards.web.provider', 'tenant_users');
        Config::set('auth.passwords.users.provider', 'tenant_users');
    }
}
