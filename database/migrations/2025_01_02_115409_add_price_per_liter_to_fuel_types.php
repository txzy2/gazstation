<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPricePerLiterToFuelTypes extends Migration
{
    /**
     * Выполняет миграцию.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fuel_types', function (Blueprint $table) {
            $table->decimal('price_per_liter', 8, 2)->nullable()->after('fuel_type_name');
        });
    }

    /**
     * Откатывает миграцию.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fuel_types', function (Blueprint $table) {
            $table->dropColumn('price_per_liter'); // удаляем колонку
        });
    }
}
