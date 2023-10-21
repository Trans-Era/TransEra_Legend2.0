<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    protected $casts = [
        'year' => 'integer',
    ];

    /**
     * @return HasOne<Brand>
     */
    public function brand(): HasOne
    {
        return $this->hasOne(Brand::class);
    }
}
