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
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('lib_id');
            $table->string('lib_titulo')->nullable(false);
            $table->date('lib_fecha_publicacion')->nullable();
            $table->unsignedInteger('lib_id_autor'); 
            $table->unsignedInteger('lib_id_editorial'); 
            $table->unsignedInteger('lib_id_categoria'); 
            $table->timestamps();

            $table->foreign('lib_id_autor')->references('aut_id')->on('autores');
            $table->foreign('lib_id_editorial')->references('edt_id')->on('editoriales');
            $table->foreign('lib_id_categoria')->references('cat_id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
};
