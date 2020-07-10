# ProyectoLicoreraSymfony
Manual Licorera del Pacífico.

Instrucciones

Para la correcta ejecución del ejemplo es necesario seguir los siguientes pasos:
●	Debe de seguirse primeramente los pasos de instalación que están en el documento de la investigación de Symfony, los cuales son la instalación de Xampp y Symfony.

●	Se debe descargar el proyecto desde la dirección de GitHub: https://github.com/jchavarria06/ejemplo-symfony

●	Una vez descargado se debe mover a la carpeta de C:\Users\nombreUsuario

●	Se debe crear la base datos en http://localhost/phpmyadmin/ con el nombre de licorera.

●	Una vez creada la base de datos se debe de importar desde el script que se encuentra en la carpeta del proyecto.Esto creará la estructura necesaria para la ejecución del ejemplo.

●	Acceda a el símbolo del sistema se accede al proyecto “cd ejemplo”.

●	Se escribe el comando “composer install”, y esperamos a que termine. 

●	Se inicializa el servidor de symfony, “symfony server:start”.

●	Se accede en un navegador a la dirección que el sistema ,”http://127.0.0.1:8000” que mostrara la página principal de la licorera.

●	En esta ventana se pueden observar en un carrusel los productos de nuevo ingreso y debajo del carrusel los productos más vendidos según sus categorías, si se le da click encima de las imágenes lo llevará a la ventana de la categoría de esa imagen.

●	En la barra de navegación se encuentran los menús de las categorías que redirigen a las respectivas categorías de los productos y los de registros que redirigen la web hacia los módulos de registrar productos , registrar usuarios y una barra de búsqueda que es simplemente estética.
 
●	En el banner que se encuentra sobre la barra de navegación están las opciones de iniciar sesion que redirige al módulo de login, el crear una cuenta que redirige al módulo de registrar usuarios y un icono de un carrito de compra que envía al usuario a la ventana de facturación.

●	En el Footer se encuentran el copyright(derechos de autor), el enlace a la ventana de Acerca de, Contáctenos y también a las redes sociales de la licorera(FaceBook, Instagram)

●	En la ventana de licores se muestran todos los licores con su nombre y su respectivo precio que estén registrados en el sistema.

●	En la ventana de cervezas se muestran todos las cervezas con su nombre y su respectivo precio que estén registrados en el sistema.

●	En la ventana de vinos se muestran todos los vinos con su nombre y su respectivo precio que estén registrados en el sistema.

●	En la ventana registro Usuario se despliega un formulario solicitando la información personal, deben de registrarse si desean realizar una compra, cabe recalcar que cada usuario nuevo lleva el Rol de cliente, luego de llenar todos los espacios requeridos se le da al botón registrar para que se cumpla el registro 

●	En el registro de productos se observan los productos que se encuentren almacenados en la base de datos con sus detalles, aquí se pueden registrar nuevos productos, modificarlos, eliminarlos.

●	AL darle click al icono de carrito de compras nos traslada a la Ventana Factura donde se cargaran automáticamente los datos mostrados en ella y se cargará a la tabla los productos deseados para comprar 













