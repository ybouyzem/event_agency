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
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_service');
            $table->foreign('id_client')->references('id')->on('client');
            $table->foreign('id_service')->references('id')->on('service');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('favoris');
    }
};
