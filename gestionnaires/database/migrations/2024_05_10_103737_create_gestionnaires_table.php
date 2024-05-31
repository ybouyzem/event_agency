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
                $table->string('type', 50)->nullable();
                $table->string('service', 50)->nullable();
                $table->float('prix')->nullable();
                $table->string('proprietaire', 50)->nullable();
                $table->string('nom', 50)->nullable();
                $table->string('ville', 50)->nullable();
                $table->string('adresse', 50)->nullable();
                $table->integer('telephone')->nullable();
                $table->string('detail', 200)->nullable();
                $table->string('compteActiver', 50)->nullable();
                $table->string('email', 50)->nullable();
                $table->string('motDePasse', 200)->nullable();
                $table->string('image1')->nullable();
                $table->string('image2')->nullable();
                $table->string('image3')->nullable();
                $table->string('image4')->nullable();
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




// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('gestionnaire', function (Blueprint $table) {
//             $table->id();
//             $table->string('type', 50)->nullable();
//             $table->string('service', 50)->nullable();
//             $table->string('proprietaire', 50)->nullable();
//             $table->string('nom', 50)->nullable();
//             $table->string('ville', 50)->nullable();
//             $table->string('adresse', 50)->nullable();
//             $table->integer('telephone')->nullable();
//             $table->string('detail', 200)->nullable();
//             $table->string('compteActiver', 50)->nullable();
//             $table->string('email', 50)->nullable();
//             $table->string('motDePasse', 200)->nullable();
//             $table->string('image1')->nullable();
//             $table->string('image2')->nullable();
//             $table->string('image3')->nullable();
//             $table->string('image4')->nullable();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('gestionnaire');
//     }
// };
