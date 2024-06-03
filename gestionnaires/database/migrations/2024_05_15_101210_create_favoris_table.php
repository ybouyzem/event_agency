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
        Schema::create('favoris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client')->nullable();
            $table->unsignedBigInteger('id_service')->nullable();
            $table->unsignedBigInteger('id_gest')->nullable();
            $table->foreign('id_client')->references('id')->on('client')->onDelete('set null');
            $table->foreign('id_service')->references('id')->on('service')->onDelete('set null');
            $table->foreign('id_gest')->references('id')->on('gestionnaire')->onDelete('set null');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('favoris');
    }
};
