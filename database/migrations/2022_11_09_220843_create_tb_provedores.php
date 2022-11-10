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
        Schema::create('tb_provedores', function (Blueprint $table) {
            $table->increments('idProvedor');
            $table->string('Empresa');
            $table->string('Direccion');
            $table->string('Pais');
            $table->string('No_fijo');
            $table->string('No_celular');
            $table->string('Correo');
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
        Schema::dropIfExists('tb_provedores');
    }
};
