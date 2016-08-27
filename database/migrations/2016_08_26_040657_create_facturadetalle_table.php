<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturadetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Facturadetalle', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('factura_id')->unsigned()->index();
            $table->integer('cantidad')->unsigned();
            $table->integer('producto_id')->unsigned()->index();
            $table->string('lote');            
            $table->double('costo');
            $table->double('valor');
            $table->integer('stockMin')->unsigned();
            $table->timestamp('vence');
            $table->timestamps();
            
            $table->foreign('factura_id')->references('id')->on('factura');
            $table->foreign('producto_id')->references('id')->on('productos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
