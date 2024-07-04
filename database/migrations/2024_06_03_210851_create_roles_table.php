<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('guard_name')->unique();
            $table->timestamps();
        });

        DB::table('roles')->insert([
            ['guard_name' => 'superadmin'],
            ['guard_name' => 'administrator'],
            ['guard_name' => 'trainer'],
            ['guard_name' => 'apprentice']
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
