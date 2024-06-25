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
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();
            $table->string('identification');
            $table->string('name');
            $table->string('last_name');
            $table->string('program');
            $table->string('file');
            $table->integer('phone');
            $table->string('email');
            $table->string('start_contract');
            $table->string('end_contract');
            $table->string('Nit_company');
            $table->string('business_name');
            $table->string('address');
            $table->string('department');
            $table->string('municipality');
            $table->string('assigned_instructor');
            $table->string('Birthdate');
            $table->string('Date_assignment');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprentices');
    }
};
