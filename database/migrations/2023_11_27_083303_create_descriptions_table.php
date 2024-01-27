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
        Schema::create('descriptions', function (Blueprint $table) {
            $table->id();
            $table->text('info1')->nullable();
            $table->text('info2')->nullable();
            $table->text('info3')->nullable();
            $table->text('info4')->nullable();
            $table->text('miniTitre1')->nullable();
            $table->text('miniDescription1')->nullable();
            $table->text('miniTitre2')->nullable();
            $table->text('miniDescription2')->nullable();
            $table->text('miniTitre3')->nullable();
            $table->text('miniDescription3')->nullable();
            $table->text('descriptionDesign')->nullable();
            $table->text('descriptionInteriorPrincipal')->nullable();
            $table->text('descriptionInteriorname1')->nullable();
            $table->text('descriptionInterior1')->nullable();
            $table->text('descriptionInteriorname2')->nullable();
            $table->text('descriptionInterior2')->nullable();
            $table->foreignId('car_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descriptions');
    }
};
