<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class Restaurant extends Model
{
    use HasUuids, HasFactory, BelongsToTenant;

    protected $fillable = [
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
        return $this->belongsToMany(User::class, 'users_restaurants');
    }

    public function tables(): HasMany
    {
        return $this->hasMany(Table::class);
    }
}
