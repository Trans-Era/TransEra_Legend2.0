<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); // Crée une colonne `id` de type BIGINT avec auto-incrément
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Clé étrangère vers la table `users`
            $table->foreignId('car_id')->constrained()->onDelete('cascade');  // Clé étrangère vers la table `cars`
            $table->date('start_date'); // Date de début de réservation
            $table->date('end_date');   // Date de fin de réservation
            $table->timestamps();       // Colonnes `created_at` et `updated_at`

            // Définir des index ou des contraintes supplémentaires si nécessaire
            $table->unique(['user_id', 'car_id', 'start_date', 'end_date']); // Assurer que la même voiture ne peut pas être réservée deux fois en même temps par le même utilisateur
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
