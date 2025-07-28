<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
        'start_date',
        'end_date',
    ];

    // Définir la relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Définir la relation avec le modèle Car
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
