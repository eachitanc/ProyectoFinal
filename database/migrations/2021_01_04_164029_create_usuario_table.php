<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('user',50);
            $table->string('pass_user',255);
            $table->string('nom_user',50);
            $table->string('ape_user',50);
            $table->string('tel_user',10);
            $table->string('correo_user',100);
            $table->integer('rol')->unsigned();
            $table->foreign('rol')  //Creación de la llave foranea
                ->references('id_rol')
                ->on('rol')
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
        Schema::dropIfExists('usuario');
    }
}
