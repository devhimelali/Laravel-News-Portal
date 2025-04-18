<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Division extends Model
{
    protected $fillable = [
        'en_name',
        'bn_name',
        'slug',
        'lat',
        'long',
    ];

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }
}
