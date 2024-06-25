<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'detail',
        'price',
        'highlight',
    ];

    public function packages(): HasMany
    {
        return $this->hasMany(Package::class);
    }
}
