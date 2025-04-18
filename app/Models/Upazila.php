<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Upazila extends Model
{
    protected $fillable = [
        'district_id',
        'en_name',
        'bn_name',
        'slug',
    ];

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
