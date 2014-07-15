<?php

class ContactosTableSeeder extends Seeder
{
	public function run()
	{
		Contacto::create([
			'nombre' => 'Laura Ruelas',
			'telefono' => '12309844583',
		]);

		$nuevoContacto = new Contacto();
		$nuevoContacto->nombre = 'Martin Garza';
		$nuevoContacto->telefono = '4568901234';
		$nuevoContacto->save();
	}
}
