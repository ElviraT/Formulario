<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_emprendimiento')->index();
            $table->boolean('figura_juridica');
            $table->boolean('firma_personal');
            $table->boolean('pyme');
            $table->boolean('compania_anonima');
            $table->boolean('requiere_financiamiento');
            $table->float('monto_estimado');
            $table->boolean('posee_cuenta');
            $table->foreignId('id_banco')->index()->nullable();
            $table->foreignId('id_bancoA')->index()->nullable();
            $table->timestamps();

            $table->foreign('id_emprendimiento')->references('id')->on('entrepreneurships');
            $table->foreign('id_banco')->references('id')->on('banks');
            $table->foreign('id_bancoA')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legal_data');
    }
}
