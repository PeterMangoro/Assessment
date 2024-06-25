<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    public function points(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }

    public function prices(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
