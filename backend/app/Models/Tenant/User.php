<?php

namespace App\Models\Tenant;

use App\Models\User as BaseUser;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends BaseUser
{
    use HasFactory;

    public function restaurants(): BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class, 'users_restaurants')
            ->using(UserRestaurant::class)
            ->withTimestamps();
    }
}
