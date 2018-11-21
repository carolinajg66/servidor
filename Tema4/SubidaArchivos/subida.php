<?php
include ('bGeneral.php');
// Cargamos cabecera html
cabecera('ejemplo.php');

$error = false;
$errores=array();
// Si no hemos pulsado el bot�n aceptar => cargamos el formulario
If (! isset($_REQUEST['bAceptar'])) {
    ?>
<html>
<h1>Subida de ficheros</h1>
<form method="post" action="subida.php"
	enctype="multipart/form-data">
	
	Nombre: <input TYPE="text" NAME="nombre"><br> 
	Nombre Usuario: <input TYPE="text" NAME="nombreUsuario"><br> 
	Email: <input TYPE="text" NAME="email"><br> 
	Contraseña: <input TYPE="text" NAME="contrasena"><br> 
	Fecha de Nacmiento: <input TYPE="text" NAME="fechaNacimiento"><br> 
	Foto: <input type="file" name="imagen" id="imagen" /><br>
	
	<input type="submit" name="bAceptar" value="Aceptar" />
</form>
</html>
<?php
} else {
    // Carpeta para ubicaci�n definitiva. Ruta relativa al fichero actual.
    // Tiene que estar creada esta carpeta, sino da error
    $dir = "ficheros/";
    // Tama�o m�ximo aceptado, si queremos que sea inferior al configurado en php.ini
    $max_file_size = "51200";
    // Creamos una lista de extensiones v�lidas, por seguridad es lo m�s v�lido.
    $extensionesValidas = array(
        "jpg",
        "gif"
       
    );
    
    echo "<pre>";
    print_r($_REQUEST);
    print_r($_FILES);
    echo "</pre>";
    /*
     * Comprobamos si hay un error al subirlo. Si ha habido alg�n error al subir no ser� necesario
     * comprobar nada m�s
     */
    //$errores;
    subidaArchivos($errores,"imagen",$extensionesValidas,$dir,$max_file_size);
    
    $nombre = recoge("nombre");
    $nombreUsuario = recoge('nombreUsuario');
    $email = recoge('email');
    $contrasena=recoge('contrasena');
    $fechaNacimiento=recoge('fechaNacimiento');
    
    comprobarDatos($error, $errores, $nombre, $nombreUsuario, $email, $contrasena, $fechaNacimiento);
    
    if (! $error) {
        
        escribir($nombre, $nombreUsuario,$email, $contrasena, $fechaNacimiento);
    }else{
        ?>
<form ACTION="<?=$_SERVER ['PHP_SELF'] ?>"
	METHOD='post'>
	<?php 
	echo "Los datos que has introducido no están en el formato correcto, los fallos que tienes son:<br>";
	foreach ($errores as $error){
	    echo $error . "<br>";
	}
	echo "<br>";
	?>
	Nombre: <input TYPE="text" NAME="nombre" VALUE="<?php echo $nombre;?>"> <br> 
	Nombre Usuario: <input TYPE="text" NAME="nombreUsuario" VALUE="<?php echo $nombreUsuario;?>"> <br> 
	Email: <input TYPE="text" NAME="email" VALUE="<?php echo $email;?>"> <br>
	Contraseña: <input TYPE="text" NAME="contrasena" VALUE="<?php echo $contrasena;?>"> <br>
	Fecha de Nacimiento: <input TYPE="text" NAME="fechaNacimiento" VALUE="<?php echo $fechaNacimiento;?>"> <br>
	
		<?php echo '<input TYPE="submit" name="bAceptar" VALUE="aceptar">';
    }
    
    }
        
   

?>
</body>
</html>