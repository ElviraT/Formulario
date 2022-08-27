<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_entrepreneurship')->index();
            $table->foreignId('id_state')->index();
            $table->foreignId('id_municipality')->index();
            $table->foreignId('id_parish')->index();
            $table->timestamps();

            $table->foreign('id_entrepreneurship')->references('id')->on('entrepreneurships');
            $table->foreign('id_state')->references('id')->on('states');
            $table->foreign('id_municipality')->references('id')->on('municipalities');
            $table->foreign('id_parish')->references('id')->on('parishes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directions');
    }
}
