<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->string('nom_producto',100);
            $table->double('valor_producto',8,2);
            $table->text('descripcion_producto');
            $table->integer('cant_producto');
            $table->string('foto_producto',100);
            $table->boolean('descuento',)->nullable($value = true);
            $table->Integer('categoria')->unsigned();
            $table->foreign('categoria')  //Creación de la llave foranea
                  ->references('id_cat')
                  ->on('categoria')
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
        Schema::dropIfExists('productos');
    }
}
