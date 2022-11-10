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
        Schema::create('tb_empleados', function (Blueprint $table) {
            $table->increments('idEmpleados');
            $table->string('Usuario');
            $table->string('CURP');
            $table->date('Fecha');
            $table->string('Rol');
            $table->string('No_celular');
            $table->string('Direccion');
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
        Schema::dropIfExists('tb_empleados');
    }
};
