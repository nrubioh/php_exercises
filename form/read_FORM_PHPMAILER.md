# FORM: An Interactive Form with PHP and PHPMailer
**Switch to:**
[Español](#form-un-formulario-interactivo-con-php-y-phpmailer)

## Overview
Welcome to the FORM repository, a project that allows you to create interactive forms and send emails using PHP and PHPMailer.

## Features

- Interactive interface with Bootstrap
- Easy connection to XAMPP and Apache
- Email sending through PHPMailer

> [!TIP]
> ## Prerequisites
> - XAMPP or a similar local server
> - Composer installed
> - Basic knowledge of PHP

## Instructions

1. Clone the repository or download the source code.
2. Copy the project folder to the root of your local server (e.g., htdocs in XAMPP).
3. Install dependencies with Composer: `composer install`
4. Create a configuration file named `config.php` in the root of the project.
5. Open `config.php` and fill in the SMTP and sender details according to your email provider. For example:

```php
<?php
return [
    'smtp' => [
        'host' => 'your-smtp-host',
        'port' => 587, // Change the port if required
        'username' => 'your-username',
        'password' => 'your-password',
    ],
    'sender' => [
        'email' => 'your-email@example.com',
        'name' => 'Your Name',
    ],
];
?>
```

6. Configure email sending settings in the `config.php` file.
7. Open the project in your web browser (e.g., [http://localhost/your/project/path](http://localhost/your/project/path)).

![FORM](../readmeImg/form_phpMailer.png?width=70)
![https://mailtrap.io/home](../readmeImg/form_phpMailer2.png?width=70)

> [!NOTE]
> ### Notes:
> - You can customize the form design by modifying the `style.css` file.
> - If you need help or have any questions, feel free to create an issue in the repository.

Thank you for using FORM!

---

# FORM: Un formulario interactivo con PHP y PHPMailer

## Descripción
Bienvenido(a) al repositorio de FORM, un proyecto que permite crear formularios interactivos y enviar correos electrónicos utilizando PHP y PHPMailer.

## Características

- Interfaz interactiva con Bootstrap
- Conexión sencilla a XAMPP y Apache
- Envío de correos electrónicos a través de PHPMailer

> [!TIP]
> ## Requisitos previos
> - XAMPP o un servidor local similar
> - Composer instalado
> - Conocimientos básicos de PHP

## Instrucciones de uso

1. Clona el repositorio o descarga el código fuente.
2. Copia la carpeta del proyecto a la raíz de tu servidor local (por ejemplo, htdocs en XAMPP).
3. Instala las dependencias con Composer: `composer install`
4. Crea un archivo de configuración llamado `config.php` en la raíz del proyecto.
5. Abre `config.php` y completa los detalles del servidor SMTP y remitente según tu proveedor de correo. Por ejemplo:

```php
<?php
return [
    'smtp' => [
        'host' => 'tu-host-smtp',
        'port' => 587, // Cambia el puerto si es necesario
        'username' => 'tu-usuario',
        'password' => 'tu-contraseña',
    ],
    'sender' => [
        'email' => 'tu-email@example.com',
        'name' => 'Tu Nombre',
    ],
];
?>
```

6. Configura los datos de envío de correo electrónico en el archivo `config.php`.
7. Abre el proyecto en tu navegador web (por ejemplo, [http://localhost/ruta/del/proyecto](http://localhost/ruta/del/proyecto)).

![FORMULARIO](../readmeImg/form_phpMailer.png?width=70)
![https://mailtrap.io/home](../readmeImg/form_phpMailer2.png?width=70)

> [!NOTE]
> ### Notas:
> - Puedes personalizar el diseño del formulario modificando el archivo `style.css`.
> - Si necesitas ayuda o tienes alguna pregunta, no dudes en crear una issue en el repositorio.

¡Gracias por utilizar FORM!
