<?php

namespace App\Models\Tenant;

use App\Models\Admin\User as BaseUser;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends BaseUser
{
    public function restaurants(): BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class, 'users_restaurants')
            ->using(UserRestaurant::class)
            ->withTimestamps();
    }
}
