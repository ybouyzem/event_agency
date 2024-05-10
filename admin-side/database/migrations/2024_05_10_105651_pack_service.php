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
        Schema::create('pack_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pack');
            $table->unsignedBigInteger('id_service');
            $table->foreign('id_pack')->references('id')->on('pack');
            $table->foreign('id_service')->references('id')->on('service');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pack_service');
    }
};
