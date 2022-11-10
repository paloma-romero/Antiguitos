<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_articulo', function (Blueprint $table) {
            $table->increments('idArticulo');
            $table->string('Tipo');
            $table->string('Interprete');
            $table->string('Descripcion');
            $table->string('No_Canciones');
            $table->string('Cantidad');
            $table->string('PCompra');
            $table->string('PVenta');
            $table->date('FIngreso');
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
        Schema::dropIfExists('tb_articulo');
    }
};
