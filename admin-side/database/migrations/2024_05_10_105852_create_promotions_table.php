<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('promotion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_service');
            $table->unsignedBigInteger('id_gestionnaire');
            $table->decimal('reduction', 8, 2);
            $table->date('date_debut');
            $table->date('date_fin');
            $table->foreign('id_service')->references('id')->on('service');
            $table->foreign('id_gestionnaire')->references('id')->on('gestionnaire');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('promotion');
    }
};
