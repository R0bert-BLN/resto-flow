<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

// TODO: Make factory
class Menu extends Model
{
    use HasUuids;

    protected $fillable = [
        'id',
        'name',
        'description',
        'restaurant_id',
    ];

    public function categories(): HasMany
    {
        return $this->hasMany(MenuCategory::class, 'menu_id');
    }

    public function restaurant(): BelongsTo {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }
}
