<?php

namespace App\Actions\Fortify;

use App\Models\Role;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array<string, string> $input
     * @throws ValidationException
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'company_name' => ['required', 'string', 'max:255'],
            'company_email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'domain' => ['required', 'string', 'alpha_dash', 'unique:domains,domain'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => $this->passwordRules(),
        ])->validate();

        return DB::transaction(function () use ($input) {
            $tenant = Tenant::create([
                'name' => $input['company_name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
            ]);

            $tenant->domains()->create([
               'domain' => $input['domain'] . '.lvh.me',
            ]);

            $tenant->run(function () use ($input) {
                return Tenant\User::create([
                    'first_name' => $input['first_name'],
                    'last_name' => $input['last_name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                    'role_id' => Role::firstOrCreate(['name' => 'owner'])->id,
                ]);
            });
        });
    }
}
