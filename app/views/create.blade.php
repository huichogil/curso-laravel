@extends('base')

@section('titulo')
Nuevo contacto
@stop

@section('contenido')
<div class="col-md-4 col-md-offset-4">
	<h1>Nuevo contacto</h1>
	{{ Form::open(['url' => 'contactos/nuevo']) }}
		<div class="form-group">
			{{ Form::label('nombre', 'Nombre del contacto') }}
			{{ Form::text('nombre') }}
		</div>
		<div class="form-group">
			{{ Form::label('telefono', 'Telefono del contacto') }}
			{{ Form::text('telefono') }}
		</div>
		{{ Form::submit('Agregar contacto', ['class' => 'btn btn-success']) }}
	{{ Form::close() }}
	<br><br>
	<a href="{{ URL::to('contactos') }}" class="btn btn-primary">Regresar</a>
</div>
@stop
