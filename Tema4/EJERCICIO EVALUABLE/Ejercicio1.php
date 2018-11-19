<?php
include ('bGeneral.php');

cabecera('Ejercicio4.php');
// Si no hemos pulsado el bot�n aceptar => cargamos el formulario
If (! isset($_REQUEST['bAceptar'])) {
    ?>
<html>
<h1>Alta Usuarios</h1>
<form method="post" action="Ejercicio4.php"
	enctype="multipart/form-data">

	<table>
		<tr>
			<td>Nombre:</td>
			<td><input type="text" name="nombre"></td>
		</tr>
		<tr>
			<td>Nombre Usuario</td>
			<td><input type="text" name="nombreUsuario"></td>
		</tr>
		<tr>
			<td>Contraseña</td>
			<td><input type="text" name="contrasenia"></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Fecha de Nacimiento</td>
			<td><input type="text" name="fechaNacimiento"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><input type="file" name="imagen" id="imagen"></td>
		</tr>
		<tr>
			<td><input type="submit" name="bAceptar" VALUE="aceptar"></td>
		</tr>
	</table>
</form>
</html>
<?php
} else {
    
    $nombre = recoge("nombre");
    $nombreUsr = recoge("nombreUsuario");
    $contrasenia=recoge("contrasenia");
    $email=recoge("email");
    $fechaNacimiento=recoge("fechaNacimiento");
    
    
    
}

?>