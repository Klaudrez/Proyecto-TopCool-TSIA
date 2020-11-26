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
            $table->id();
            $table->string('nombre');
            $table->unsignedInteger('precio unidad');
            $table->unsignedInteger('precio 3 a 12');
            $table->unsignedInteger('precio mas de 12');
            $table->boolean('publico');
            $table->text('descripcion');
            $table->timestamps();
            ////////////////RELACIONES//////////////////
            //$table->unsignedInteger('id_subcategoria');
            $table->unsignedBigInteger('id_subcategoria');
            $table->foreign('id_subcategoria')->references('id')->on('sub_categorias');
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
