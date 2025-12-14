<?php

namespace App\Models\Tenant;

use App\Models\Common\Address;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Restaurant extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'phone',
        'logo',
    ];

    public function address():MorphOne
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'users_restaurants')
            ->using(UserRestaurant::class)
            ->withTimestamps();
    }
}
