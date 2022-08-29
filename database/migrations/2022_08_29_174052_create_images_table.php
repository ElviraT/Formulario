<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_emprendimiento')->index();
            $table->string('registro_mercantil');
            $table->string('cedula');
            $table->string('rif');
            $table->string('certificado_emprende');
            $table->timestamps();

            $table->foreign('id_emprendimiento')->references('id')->on('entrepreneurships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
