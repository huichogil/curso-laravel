@extends('base')

@section('titulo')
Editar contacto
@stop

@section('contenido')
<h1>Nuevo contacto</h1>
{{ Form::open(['url' => 'contactos/' . $contacto->id, 'method' => 'PUT']) }}
	{{ Form::label('nombre', 'Nombre del contacto') }}
	{{ Form::text('nombre', $contacto->nombre) }}<br><br>
	{{ Form::label('telefono', 'Telefono del contacto') }}
	{{ Form::text('telefono', $contacto->telefono) }}
	{{ Form::submit('Actualizar contacto') }}
{{ Form::close() }}
<br><br>
<a href="{{ URL::to('contactos') }}">Regresar</a>
@stop

