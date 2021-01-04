<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->increments('id_factura');
            $table->date('fecha_factura');
            $table->Integer('cantidad');
            $table->double('total');
            $table->double('descuento');
            $table->integer('usuario_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->integer('formapago_id')->unsigned();
            $table->foreign('usuario_id')  //Creación de la llave foranea
                  ->references('id_user')
                  ->on('usuario')
                  ->onDelete('cascade');
            $table->foreign('producto_id')  //Creación de la llave foranea
                ->references('id_producto')
                ->on('productos')
                ->onDelete('cascade');
            $table->foreign('formapago_id')  //Creación de la llave foranea
                ->references('id_pago')
                ->on('FormaPago')
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
        Schema::dropIfExists('factura');
    }
}
