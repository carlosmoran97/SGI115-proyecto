## Instrucciones

Lo esencial es tener instalado composer y php.
	
Cumplir con los requisitos tecnicos(Mirar capturas de pantalla)

CONFIGURACION 

Necesitas ubicarte en la carpeta donde tengas el proyecto y seguir los siguientes pasos:

1.Crear enlace simbólico para subir foto.Ejecutar el comando: php artisan storage:link

2.Luego ejecutas este comando para agregar dependencias faltantes: php artisan vendor:publish

3.Crear la base de datos en MySQL.Puedes utilizar cualquier nombre.

4.Buscar el archivo ".env" en el proyecto y cambiar el valor de los siguientes parametros:

	DB_DATABASE=NOMBREBD
	DB_USERNAME=USUARIO QUE POR DEFECTO ES ROOT
	DB_PASSWORD=CONTRASEÑA SI ES QUE LA TIENES

5.Configurado los parametros, ejecutar el siguiente comando para crear las tablas: php artisan migrate

6.Verificar si las tablas fueron creadas de forma satisfactoria.

7.Una vez creada las tablas,ejecutar el siguiente comando para crear el usuario administrador: php artisan db:seed

8.Buscar las credenciales en la carpeta database->seeds->UsersTableSeeder.php

9.Ubicar la clase MailParam que se encuentra en la carpeta "app" y definir correo gmail(linea 10) y contraseña(linea 11).
De ese correo se enviaran los mensajes que escribas en la aplicacion en el ultimo tablero del dashboard

10.Por último, dirigirse al controlador MailController y en la linea 34 definir el correo remitente

## Recomendaciones

Recomiendo configurar un virtual HOST para la ejecucion correcta de la aplicacion.

Adjunto dos PDF para configurar un virtual HOST tanto para windows como linux

Si te sale error al enviar email despues de configurar tus credenciales, talvez tengas que darle permiso a tu cuenta de gmail para que se pueda 
conectar con aplicaciones.

LEER ESTE LINK:
https://support.google.com/a/answer/6260879?hl=es

