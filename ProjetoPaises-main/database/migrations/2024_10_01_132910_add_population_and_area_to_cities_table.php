<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPopulationAndAreaToCitiesTable extends Migration
{
    public function up()
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->integer('population')->nullable(); // População da cidade
            $table->decimal('area', 8, 2)->nullable(); // Área da cidade em km2
        });
    }

    public function down()
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->dropColumn(['population', 'area']);
        });
    }
}

