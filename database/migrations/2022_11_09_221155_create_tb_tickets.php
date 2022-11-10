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
        Schema::create('tb_tickets', function (Blueprint $table) {
            $table->increments('idTickets');
            $table->string('Empleado');
            $table->string('Usuario');
            $table->string('Articulos');
            $table->string('Cantidad');
            $table->string('PVenta');
            $table->string('FVenta');
            $table->string('FPago');
            $table->string('Total');
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
        Schema::dropIfExists('tb_tickets');
    }
};
