<?php

class ContactoController extends BaseController
{
	public function index()
	{
		$contactos = Contacto::all();
		return View::make('index', ['contactos' => $contactos]);
	}

	public function create()
	{
		return View::make('create');
	}

	public function store()
	{
		if (Input::has('nombre') and Input::has('telefono')) {
			$contacto = new Contacto();
			$contacto->nombre = Input::get('nombre');
			$contacto->telefono = Input::get('telefono');
			$contacto->save();

			return Redirect::to('contactos');
		}

		return "Necesita los campos de nombre y telefono";
	}


	public function show($contactoId)
	{
		$contacto = Contacto::find($contactoId);

		if (!$contacto) {
			return "Contacto no encontrado";
		}

		return View::make('show', ['contacto' => $contacto]);
		
	}


	public function edit($contactoId)
	{
		$contacto = Contacto::find($contactoId);

		if (!$contacto) {
			return "Contacto no encontrado";
		}

		return View::make('edit', ['contacto' => $contacto]);		
	}


	public function update($contactoId)
	{
		$contacto = Contacto::find($contactoId);

		if (!$contacto) {
			return "Contacto no encontrado";
		}

		if (Input::has('nombre') and Input::has('telefono')) {
			$contacto->nombre = Input::get('nombre');
			$contacto->telefono = Input::get('telefono');
			$contacto->save();

			return Redirect::to('contactos');
		}

		return "Se requiere un nombre y telefono.";
	}


	public function destroy($contactoId)
	{
		$contacto = Contacto::find($contactoId);

		if (!$contacto) {
			return "Contacto no encontrado";
		}

		$contacto->delete();

		return Redirect::to('contactos');
	}
}
