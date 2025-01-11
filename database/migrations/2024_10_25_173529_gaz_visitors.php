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
        Schema::create('gaz_visitors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('station_id');         
            $table->uuid('fuel_id');             
            $table->string('car_model');
            $table->string('car_type');
            $table->float('totalLiters'); 
            $table->integer('octane_rating');
            $table->string('terminal');
            $table->float('cost');
            $table->enum('payment_method', ['cash', 'card', 'app']); 
            $table->float('discount')->nullable(); 
            $table->timestamp('visit_time'); 
            $table->timestamps();

            $table->foreign('station_id')->references('id')->on('gaz_station')->onDelete('cascade');
            $table->foreign('fuel_id')->references('id')->on('fuel_data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
