@extends('base')

@section('titulo')
Mostrar {{ $contacto->nombre }}
@stop

@section('contenido')
<h1>Informacion de {{ $contacto->nombre }}</h1>

<p>Telefono del contacto: {{ $contacto->telefono }}</p>

<a href="{{ URL::to('contactos/' . $contacto->id . '/edit') }}">Editar contacto</a>
<br><br>
<a href="{{ URL::to('contactos/' . $contacto->id . '/destroy') }}">Eliminar contacto</a>
<br><br>
<a href="{{ URL::to('contactos') }}">Regresar</a>
@stop

