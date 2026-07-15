<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('adds', function (Blueprint $table) {
            $table->id();
            $table->integer('num1');
            $table->integer('num2');
            $table->integer('resul');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adds');
    }
};
