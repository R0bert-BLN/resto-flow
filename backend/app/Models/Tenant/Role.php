<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasUuids;

    protected $fillable = [
        'id',
        'name',
    ];
}
