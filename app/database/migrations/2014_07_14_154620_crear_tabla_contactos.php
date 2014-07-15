<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaContactos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::create('contactos', function(Blueprint $tabla) {
                    $tabla->increments('id');
                    $tabla->string('nombre', 45);
                    $tabla->string('telefono', 10);
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
                Schema::drop('contactos');
	}

}
