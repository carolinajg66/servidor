<?php
include ('bGeneral.php');

cabecera('Ejercicio4.php');
// Si no hemos pulsado el botón aceptar => cargamos el formulario
If (! isset($_REQUEST['bAceptar'])) {
    ?>
<html>
<h1>Libro de Visitas </h1>
<form method="post" action="Ejercicio4.php" enctype="multipart/form-data">

	 
	 Nombre: <input type="text" name="nombre">
	 E-mail: <input type="email" name="emailaddress">
</form>
</html>
<?php
} else {
    
}

?>