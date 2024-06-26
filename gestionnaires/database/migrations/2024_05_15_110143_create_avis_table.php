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
        Schema::create('avis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_service');
            $table->integer('rating');
            $table->string('commentaire', 20);
            $table->foreign('id_service')->references('id')->on('service');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('avis');
    }
};
