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
            $table->string('titre', 5);
            $table->string('image', 200);
            $table->string('detail', 200);
            $table->decimal('prix', 8, 2);
            $table->enum('deplacement', ['oui', 'non']);
            $table->foreign('id_gestionnaire')->references('id')->on('gestionnaire');
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
