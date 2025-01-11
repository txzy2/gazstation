<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('gaz_station', function (Blueprint $table) {
            $table->string('location')->nullable();
            $table->string('name');
            $table->string('owner')->nullable();
            $table->string('phone')->nullable();
            $table->string('work_hours')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gaz_station', function (Blueprint $table) {
            // Восстановить оригинальные поля, если нужно
            $table->string('location')->nullable(false);
            $table->string('name');
            $table->string('owner')->nullable(false);
            $table->string('phone')->nullable(false);
            $table->string('work_hours')->nullable(false);
        });
    }
};
