<?php
/*
 * <tr>
			<td>Foto</td>
			<td><input type="file" name="imagen" id="imagen"></td>
		</tr>
 * 
 * */
include ('bGeneral.php');

cabecera('Ejercicio1.php');

/*$rutaCompleta="ficheros/datos.txt";*/
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
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Fecha de Nacimiento</td>
			<td><input type="text" name="fechaNacimiento"></td>
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
    
    comprobarDatos();
    
    if (! $error) {
        header("location:correcto.php?nombre=$nombre&nombreUsuario=$nombreUsr&contrasenia=$contrasenia
                &email=$email&fechaNacimiento=$fechaNacimiento");
    } else {
        
        ?>
		<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
		METHOD='post'>
		<p>Los datos que has introducido no estan en el formato correcto</p>
		
		Nombre: <input TYPE="text" NAME="nombre" VALUE="<?php echo $nombre;?>"> <br> 
		Nombre Usuario: <input TYPE="text" NAME="nombreUsuario" VALUE="<?php echo $nombreUsr; ?>"> <br>
		Contraseña: <input TYPE="text" NAME="contrasenia" VALUE="<?php echo $contrasenia;?>"> <br> 
		Email: <input TYPE="text" NAME="email" VALUE="<?php echo $email;?>"> <br> 
		Fecha Nacimiento: <input TYPE="fechaNacimiento" NAME="nombre" VALUE="<?php echo $fechaNacimiento;?>"> <br> 
		
		<?php
        echo '<input TYPE="submit" name="bAceptar" VALUE="aceptar">';
    }
    
}

?>
</form>
<?php

pie();
?>