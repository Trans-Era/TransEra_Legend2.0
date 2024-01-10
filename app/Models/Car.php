<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $casts = [
        'year' => 'integer',
    ];

    /**
     * Retourne le prix pour une semaine
     */
    public function getWeekPrice() : int
    {
        return $this->price * 7 * 0.80;
    }

    /**
     * Retourne le prix pour un jour d'un weekend
     */
    public function getWeekEndDayPrice() : int
    {
        return $this->price * 1.3;
    }

    public function getWeekEndPrice() : int
    {
        return $this->price * 3 *  1.05;
    }

    public function get3dayPrice() : int
    {
        return $this->price * 3 *  0.80;
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * @return BelongsTo<Brand, Car>
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * @return BelongsTo<Brand, Car>
     */
    public function modele(): BelongsTo
    {
        return $this->belongsTo(Modele::class);
    }

    /**
     * @return BelongsTo<Type, Car>
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * @return HasMany<Photo>
     */
    public function photo(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    /**
     * @return HasMany<Desscription>
     */
    public function desscription(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
