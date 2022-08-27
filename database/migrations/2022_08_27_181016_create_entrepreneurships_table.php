<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepreneurshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrepreneurships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_emprendedor')->index();
            $table->boolean('tiene_emprendimiento');
            $table->string('nombre_emprendimiento')->nullable();
            $table->longText('descripcion');
            $table->string('sector_economico');
            $table->string('ubicacion');
            $table->timestamps();

            $table->foreign('id_emprendedor')->references('id')->on('entrepreneurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrepreneurships');
    }
}
