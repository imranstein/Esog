<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->timestamp('isPaid')->nullable();
        });
    }
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('isPaid');
        });
    }
};
