# Aplicación Gestor de Notas by Daniel Sánchez

_ Esta es un aplicación de gestión de notas bastante sencilla realizada utilizando Laravel Framework_

![screenshot_frontend](https://user-images.githubusercontent.com/42616141/54733020-8ec05a80-4b6d-11e9-81a2-392a10c8dec6.png)

### Instalación 🔧

_ Clonar este repositorio _

_Por medio de composer ejecutar el comando_

```
composer install
```

_Para instalar todas las dependencias del proyecto en el equipo local_

_Crear la Base de datos de la aplicación `notas_app` utilizando MySQL_

```
mysql -u $USUARIO -p 

CREATE DATABASE notas_app;
```

_Crear la Base de datos para las pruebas `notas_app_test` utilizando MySQL_

```
mysql -u $USUARIO -p 

CREATE DATABASE notas_app_test;
```

_Ejecutar las migraciones para generar datos en la base de datos_

_En el directorio donde se ha descomprimido el proyecto ejecutar el comando_

```
php artisan migrate --seed
```

## Construido con 🛠️

* [Laravel](https://laravel.com/) - El framework web usado
* [fab-admin](http://fab-admin-templates.multipurposethemes.com/fab-admin/src/) - Interfaz gráfica

## History
2019-03-21 - First public version

## Credits
- Developed by: Daniel Sánchez

## License
The MIT License (MIT)