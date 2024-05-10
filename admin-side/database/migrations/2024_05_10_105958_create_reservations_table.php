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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->string('statut', 50);
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_service');
            $table->unsignedBigInteger('id_pack');
            $table->unsignedBigInteger('id_promotion');
            $table->dateTime('date_reservation');
            $table->foreign('id_client')->references('id')->on('client');
            $table->foreign('id_service')->references('id')->on('service');
            $table->foreign('id_pack')->references('id')->on('pack');
            $table->foreign('id_promotion')->references('id')->on('promotion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservation');
    }
};
