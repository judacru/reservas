# Prueba Psicol

## Instalación

Para ejecutarse localmente, debe modificar el archivo .env con las siguientes variables:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=reservas
DB_USERNAME=root
DB_PASSWORD=
```

* Instalar Xampp

* Pegar la carpeta del proyecto en la carpeta htdocs que se encuentra en la siguiente dirección: C:\xampp\htdocs.

* Ejecutar los queries en phpmyadmin

* Ejecutar la siguiente linea de comando en consola para migrar las tablas
```
php artisan migrate 
```


## Base de datos

El ejemplo de los scripts de la base de datos:

```sql
CREATE SCHEMA reservas ;


```
