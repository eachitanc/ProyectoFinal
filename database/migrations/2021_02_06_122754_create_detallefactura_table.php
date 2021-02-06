<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallefacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallefactura', function (Blueprint $table) {
            $table->integer('factura_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->foreign('factura_id')  //Creación de la llave foranea
                ->references('id_factura')
                ->on('factura')
                ->onDelete('cascade');
            $table->foreign('producto_id')  //Creación de la llave foranea
                ->references('id_producto')
                ->on('productos')
                ->onDelete('cascade');
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
        Schema::dropIfExists('detallefactura');
    }
}
