<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

// TODO: Add factory
class MenuCategory extends Model
{
    use HasUuids;

    protected $fillable = [
        'id',
        'name',
        'description',
        'position',
        'menu_id',
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(MenuItem::class, 'category_id');
    }
}
