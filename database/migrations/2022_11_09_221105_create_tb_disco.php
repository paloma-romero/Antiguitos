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
        Schema::create('tb_disco', function (Blueprint $table) {
            $table->increments('idDisco');
            $table->string('Imagen');
            $table->string('Interprete');
            $table->string('Disquera');
            $table->string('Lanzamiento');
            $table->string('No_Canciones');
            $table->string('Cantidad');
            $table->string('PCompra');
            $table->string('PVenta');
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
        Schema::dropIfExists('tb_disco');
    }
};
