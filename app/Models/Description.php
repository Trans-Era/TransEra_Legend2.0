<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Description extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo<Car, Description>
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
