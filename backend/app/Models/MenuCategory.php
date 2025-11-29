<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class MenuCategory extends Model
{
    use HasUuids, BelongsToTenant;

    protected $fillable = [
        'name',
        'description',
        'position',
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
}
