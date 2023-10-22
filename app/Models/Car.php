<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    protected $casts = [
        'year' => 'integer',
    ];

    /**
     * @return BelongsTo<Brand, Car>
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
