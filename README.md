# Smry
Este proyecto hace uso de un contenedor, el cual puede ejecuta y expone los servicios necesarios para el funcionamiento de una SPA(Vue3) y un servicio de backend(PhP 7.4+).
* Se hace uso de Vue3-starter-template(https://github.com/kouts/vue3-starter-template) como base para construir el front.

## Included
 * Vue Router
 * Vuex
 * Axios
 * Vue Notification
 * Lumen 
 * PHP
 * Docker
 
## Instalación 🔧
* Es necesario tener instalado [Docker](https://docs.docker.com/engine/install/) y [Composer](https://docs.docker.com/compose/install/)  en tu equipo así como una  conexión a Internet.

* Ubicarse en {PROJECT-PATH}/docker  y ejecutar `docker-compose build`.
* Puede obviar el uso del contendor y exponer la api y ui en cualquier otro entorno.

### back(api)
* Ubicarse en {PROJECT-PATH}/src/api
* Ejecutar `composer install` para instalar dependencias
* Ejecutar `copy .env.example .env`  el archivo example contiene credenciales preconfiguradas para acceso al servicio brindado por docker.
* Ejecutar `php artisan migrate:refresh --seed` para poblar las tablas con datos iniciales

### front(ui)
* Ubicarse en {PROJECT-PATH}/src/ui
* Ejecutar `npm install` para instalar dependencias
* Ejecutar `copy .env.example .env`   el archivo example contiene rutas preconfiguradas para acceso al servicio brindado por docker.
* Ejecutar `npm run serve` 
* Acceda a la aplicacion a traves de http://localhost:8080


### Despliegue en otro entorno
* Puede desplegar la app en cualquier entorno alojando y  xponiendo unicamente el contenido de {PROJECT-PATH}/src
* Para desplegar es necesario, ademas de los comandos anterior para cada servicio modificar los archivos .env y editar credenciales y rutas
* Adicional es necesario editar el proxy alojado en el archivo {PROJECT-PATH}/src/ui/vue.config.js segun las rutas en las que se expone el backend

## Credits
* Vue3-starter-template (https://github.com/kouts/vue3-starter-template)

## Author
* Name: **Paulo Horna**
* Email: **paulo.ahll@gmail.com**

