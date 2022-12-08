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
        Schema::create('tb_comic', function (Blueprint $table) {
            $table->increments('idcomic');
            $table->string('nombre');
            $table->string('edicion');
            $table->string('precioCompra');
            $table->string('compania');
            $table->string('precioVenta');
            $table->string('cantidad');
            $table->date('fechaIngreso');
            $table->string('idproveedor');
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
        Schema::dropIfExists('tb_comic');
    }
};
