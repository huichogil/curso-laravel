@extends('base')

@section('titulo')
Contactos
@stop

@section('contenido')
	<div id="name" class="col-md-8 col-md-offset-2">
		@if (!$contactos)
			<h2>No hay contactos para mostrar.</h2>
		@else
			<h1>Contactos</h1>
			<ul>
			@foreach ($contactos as $contacto)
				<li><a href="{{ URL::to('contactos/' . $contacto->id) }}">{{ $contacto->nombre }} - {{ $contacto->telefono }}</a></li>
			@endforeach
			</ul>
		@endif

		<br><br><br>
		<a href="{{ URL::to('contactos/nuevo') }}" class="btn btn-lg btn-primary">Agregar contacto</a>
	</div>	
@stop
