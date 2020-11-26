<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCantidadProductoPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantidad_producto_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cantidad producto');
            $table->unsignedInteger('precio cantidadXproducto');
            $table->timestamps();
            ////////////////RELACIONES//////////////////
            //$table->unsignedInteger('id_producto');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('productos');
            //$table->unsignedInteger('id_pedido');
            $table->unsignedBigInteger('id_pedido');
            $table->foreign('id_pedido')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cantidad_producto_pedidos');
    }
}
