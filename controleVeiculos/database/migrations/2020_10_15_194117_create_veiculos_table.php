<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('placa');
            $table->string('estado');
            $table->bigInteger('ano_fabricacao');
            $table->bigInteger('km_rodado');
            $table->bigInteger('crlv');
            $table->bigInteger('renavam');
            $table->string('chassi');
            $table->string('disponivel');
            $table->decimal('valor_diaria', 5,2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
