<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tags')->nullable();
            $table->text('description')->nullable();
            $table->string('author')->nullable();
            $table->string('document')->nullable();
            $table->string('video')->nullable();
            $table->boolean('is_paid')->default(false);
            $table->double('length')->nullable();
            $table->timestamps();
        });
    }
};
