<?php

namespace App\Models\Common;

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
