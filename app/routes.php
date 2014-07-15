<?php

Route::get('contactos', 'ContactoController@index');

Route::get('contactos/nuevo', 'ContactoController@create');

Route::post('contactos/nuevo', 'ContactoController@store');

Route::get('contactos/{id}', 'ContactoController@show');

Route::get('contactos/{id}/edit', 'ContactoController@edit');

Route::put('contactos/{id}', 'ContactoController@update');

Route::delete('contactos/{id}/destroy', 'ContactoController@destroy');
