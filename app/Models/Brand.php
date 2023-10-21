<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brand extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo<Car, Brand>
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
