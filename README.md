# Proyecto TFM - Desarrollo de una aplicación web para [GYM]

## Descripción

Este proyecto corresponde al Trabajo Fin de Máster (TFM) de **Desarrollo de Aplicaciones Web**. La aplicación es un sistema de gestión para un **gimnasio virtual** similar a **Cristiano Ronaldo Fitness Crunch**. Utiliza Laravel como framework de backend, MySQL como base de datos, y Bootstrap y JavaScript para el frontend.

El objetivo principal del proyecto es crear una plataforma que permita a los usuarios registrarse, acceder a sus entrenamientos, realizar reservas y realizar un seguimiento de su progreso en el gimnasio.

## Tecnologías utilizadas

- **Backend**: Laravel
- **Frontend**: Bootstrap, JavaScript, Vue.js
- **Base de Datos**: MySQL
- **Servidor**: Apache (con Docker para desarrollo local)
- **Autenticación**: Laravel Sanctum para la autenticación API

## Funcionalidades

1. **Registro de usuarios**: Los usuarios pueden crear cuentas para acceder a la plataforma.
2. **Inicio de sesión**: Los usuarios pueden iniciar sesión para ver su panel de control y acceder a funcionalidades personalizadas.
3. **Gestión de reservas**: Los usuarios pueden hacer reservas para clases o servicios del gimnasio.
4. **Seguimiento de entrenamientos**: Los usuarios pueden registrar y seguir su progreso en entrenamientos.
5. **Panel de administración**: Los administradores pueden gestionar usuarios, entrenamientos y reservas.

## Instalación

1. Clona el repositorio:
    ```bash
    git clone https://github.com/jonathanmhr/proyecto-laravel.git
    ```

2. Navega a la carpeta del proyecto:
    ```bash
    cd proyecto-laravel
    ```

3. Instala las dependencias de PHP con Composer:
    ```bash
    composer install
    ```

4. Instala las dependencias de JavaScript con NPM:
    ```bash
    npm install
    ```

5. Configura el archivo `.env` con tus credenciales de base de datos y otros parámetros necesarios.

6. Crea la base de datos y ejecuta las migraciones:
    ```bash
    php artisan migrate
    ```

7. Ejecuta el servidor de desarrollo:
    ```bash
    php artisan serve
    ```

## Enlaces importantes

- [Repositorio en GitHub](https://github.com/jonathanmhr/proyecto-laravel)
- [Documentación de Laravel](https://laravel.com/docs)
