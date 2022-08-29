<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEconomicDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economic_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_emprendimiento')->index();
            $table->foreignId('id_promedio')->index();
            $table->boolean('faov');
            $table->boolean('inces');
            $table->boolean('ivss');
            $table->boolean('sumar');
            $table->boolean('otra');
            $table->timestamps();

            $table->foreign('id_emprendimiento')->references('id')->on('entrepreneurships');
            $table->foreign('id_promedio')->references('id')->on('averages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('economic_data');
    }
}
