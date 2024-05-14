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
        Schema::create('service_categorie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_service');
            $table->unsignedBigInteger('id_categorie');
            $table->foreign('id_service')->references('id')->on('service');
            $table->foreign('id_categorie')->references('id')->on('categorie');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_categorie');
    }
};
