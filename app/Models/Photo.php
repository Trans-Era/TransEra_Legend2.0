<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
