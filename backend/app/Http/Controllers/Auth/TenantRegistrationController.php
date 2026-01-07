<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Central\Tenant;
use App\Models\Tenant\Role;
use App\Models\Tenant\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TenantRegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tenant_name' => ['required', 'string', 'max:255'],
            'tenant_email' => ['required', 'string', 'email', 'max:255'],
            'tenant_phone' => ['required', 'string', 'max:20'],
            'domain' => ['required', 'string', 'alpha_dash', 'unique:domains,domain'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $appDomain = env('APP_DOMAIN', 'lvh.me');
        $fullDomain = $validated['domain'] . '.restoflow.' . $appDomain;

        $tenant = Tenant::create([
            'name' => $validated['tenant_name'],
            'email' => $validated['tenant_email'],
            'phone' => $validated['tenant_phone'],
        ]);

        $tenant->domains()->create([
            'domain' => $fullDomain,
        ]);

        $tenant->run(function () use ($validated) {
            $role = Role::firstOrCreate(['name' => 'owner']);

            User::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role_id' => $role->id,
            ]);
        });

        return response()->json([
            'message' => 'Tenant created successfully',
            'redirect_url' => "https://{$fullDomain}/login"
        ], 201);
    }
}
