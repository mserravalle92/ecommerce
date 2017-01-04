<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //REALIZAR CAMBIOS

        Schema::create('productos',function(Blueprint $tabla){
            
            $tabla->increments("id");
            $tabla->integer("user_id")->unsiged()->index();
            $tabla->string('titulo');
            $tabla->text('descripcion');
            $tabla->decimal('pricing',9,2);
            $tabla->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //REVERTIR CAMBIOS

        Schema::drop('productos');
    }
}
