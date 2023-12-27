<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    /**
     * @return HasMany<Car>
     */
    public function car(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
