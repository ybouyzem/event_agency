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
        Schema::create('gestionnaire', function (Blueprint $table) {
            $table->id();
            $table->string('type', 50);
            $table->string('proprietaire', 50);
            $table->string('nom', 50);
            $table->string('ville', 50);
            $table->string('adresse', 50);
            $table->integer('telephone');
            $table->string('detail', 200);
            $table->string('email', 50);
            $table->string('motDePasse', 200);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestionnaire');
    }
};
