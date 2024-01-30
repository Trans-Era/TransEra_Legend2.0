<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Photo extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo<Car, Photo>
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
