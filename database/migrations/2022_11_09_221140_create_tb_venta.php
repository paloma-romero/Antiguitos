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
        Schema::create('tb_venta', function (Blueprint $table) {
            $table->increments('idVenta');
            $table->string('Imagen');
            $table->string('Codigos');
            $table->string('Articulos');
            $table->string('Cantidad');
            $table->string('Stock');
            $table->string('Precio');
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
        Schema::dropIfExists('tb_venta');
    }
};
