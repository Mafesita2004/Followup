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
        Schema::create('administrators', function (Blueprint $table) {
            $table->id();
            $table->integer('identification');
            $table->string('name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('phone');
            $table->string('address');
            $table->string('country');
            $table->string('department');
            $table->string('municipality');
            $table->string('neighborhood');
            $table->string('Birthdate');
            $table->string('Birthdate');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrators');
    }
};
