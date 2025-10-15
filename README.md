# Sistema de Inicio de Sesión con CodeIgniter

Este proyecto es un simple sistema de inicio de sesión desarrollado utilizando el framework PHP CodeIgniter. Proporciona una base sólida para la autenticación de usuarios en aplicaciones web.

## Requisitos del Sistema

- PHP >= 7.2
- CodeIgniter >= 4.x
- MySQL

## Instalación

1. Clone el repositorio en su máquina local:

   ```bash
   git clone https://github.com/fmontenegro0510/c4-login.git
   ```

2. Configure la base de datos en `application/config/database.php` con los detalles de su base de datos.

3. Ejecute el script SQL ubicado en `sql/database.sql` en su base de datos para crear la tabla de usuarios.

4. Inicie el servidor de desarrollo de CodeIgniter:

   ```bash
   php -S localhost:8080 -t public
   ```

5. Abra su navegador y vaya a [http://localhost:8080](http://localhost:8080).

## Estructura del Proyecto

- `application/`: Contiene el código fuente de la aplicación CodeIgniter.
  - `config/`: Configuraciones de la aplicación.
  - `controllers/`: Controladores de la aplicación.
  - `models/`: Modelos para interactuar con la base de datos.
  - `views/`: Vistas HTML de la aplicación.
- `public/`: Archivos públicos accesibles desde el navegador.
- `sql/`: Scripts SQL para la creación de la base de datos.

## Funcionalidades

- **Inicio de Sesión Seguro**: Implementación segura de inicio de sesión con hashes de contraseñas.
- **Registro de Usuarios**: Posibilidad de registrar nuevos usuarios.
- **Cerrar Sesión**: Funcionalidad para cerrar sesión de manera segura.

## Contribuir

¡Siéntase libre de contribuir! Puede abrir problemas (issues) o enviar solicitudes de extracción (pull requests).

## Licencia

Este proyecto está bajo la licencia [MIT](LICENSE).
