<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Address extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'id',
        'country',
        'city',
        'street',
        'zip_code',
        'addressable_id',
        'addressable_type',
    ];

    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }
}
