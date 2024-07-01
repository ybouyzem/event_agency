<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('client', function (Blueprint $table) {
            $table->string('password_reset_code')->nullable();
            $table->timestamp('password_reset_code_expires_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('client', function (Blueprint $table) {
            $table->dropColumn('password_reset_code');
            $table->dropColumn('password_reset_code_expires_at');
        });
    }

};
