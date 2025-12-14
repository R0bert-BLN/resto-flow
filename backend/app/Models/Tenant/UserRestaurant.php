<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserRestaurant extends Pivot
{
    use HasUuids;

    protected $fillable = [
        'id',
        'user_id',
        'restaurant_id',
    ];
}
