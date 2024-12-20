<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('gaz_station', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('station_name');
            $table->string('location');
            $table->string('contact_info')->nullable();
            $table->string('opening_hours')->nullable();
            $table->string('manager_name')->nullable();
            $table->timestamps();
        });

        Schema::create('fuel_types', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('fuel_type_name')->unique();
            $table->timestamps();
        });

        Schema::create('terminals', function (Blueprint $table) {
            $table->uuid('id')->primary(); // Primary key on the 'id' column
            $table->uuid('gaz_station_id');
            $table->uuid('fuel_type_id');
            $table->string('terminal_name');
            $table->enum('status', ['1', '0'])->default('0');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('gaz_station_id')->references('id')->on('gaz_station')->onDelete('cascade');
            $table->foreign('fuel_type_id')->references('id')->on('fuel_types')->onDelete('cascade');

            // Create a unique constraint instead of a composite primary key
            $table->unique(['gaz_station_id', 'fuel_type_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('terminals');
        Schema::dropIfExists('gaz_station');
        Schema::dropIfExists('fuel_types');
    }
};
