<?php

namespace App\Models\Tenant;

use App\Models\User as BaseUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends BaseUser
{
    use HasFactory;

    protected $fillable = [
        'id',
        'avatar',
        'first_name',
        'last_name',
        'name',
        'email',
        'email_verified_at',
        'password',
        'phone',
        'is_active',
        'role_id',
    ];

    public function restaurants(): BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class, 'users_restaurants')
            ->using(UserRestaurant::class)
            ->withTimestamps();
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
