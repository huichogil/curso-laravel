Instalación
-----------

Clonar proyecto:
```sh
git clone git@github.com:ZzAntares/curso-laravel.git
```


En el archivo `bootstrap/start.php` al rededor de la linea 29 agregar el hostname del pc, esto para que laravel reconozca nuestro equipo como uno de desarrollador, ejemplo:

```php
$env = $app->detectEnvironment(array(

	'local' => array('antares', 'mi-PC'), // Hay 2 equipos registrados: antares y mi-PC

));
```


Dentro del proyecto (en la raiz) crear el archivo de configuraciones a la BD, el archivo se debe llamar `.env.local.php`:

```php
<?php

return array(
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'nombre de tu base de datos',
	'DB_USER' => 'usuario de la base de datos',
	'DB_PASS' => 'contraseña de la base de datos',
);
```


Ahora utilizando composer instalar el proyecto:

```sh
composer install
```


Ejecutar las migraciones para tener la misma estructura en las tablas de la BD:

```sh
php artisan migrate
```

Listo!
