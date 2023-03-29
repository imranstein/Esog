<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('thumbnail')->nullable();
            $table->integer('credit_hour')->nullable();
            $table->integer('video_length')->nullable();
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('thumbnail');
            $table->dropColumn('credit_hour');
            $table->dropColumn('video_length');
        });
    }
};
