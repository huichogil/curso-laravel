<?php


Route::get('contactos/{contacto?}', function($contacto = 'default') {
    return $contacto;
});
