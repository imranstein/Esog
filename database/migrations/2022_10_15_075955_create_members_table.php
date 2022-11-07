<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->string('workplace')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('is_active')->default(0);
            $table->timestamps();
        });
    }
};
