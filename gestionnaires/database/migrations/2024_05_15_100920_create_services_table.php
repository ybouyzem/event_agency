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
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_gestionnaire');
            $table->unsignedBigInteger('id_categorie');
            $table->string('titre', 50);
            $table->string('image', 200);
            $table->string('detail', 200);
            $table->decimal('prix-debut', 8, 2);
            $table->decimal('prix-fin', 8, 2);
            $table->enum('deplacement', ['oui', 'non']);
            $table->foreign('id_gestionnaire')->references('id')->on('gestionnaire');
            $table->foreign('id_categorie')->references('id')->on('categorie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
