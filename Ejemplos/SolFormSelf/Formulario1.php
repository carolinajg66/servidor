<?php
include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$error = false;
$errores=array();
if (! isset($_REQUEST['bAceptar'])) {
    ?>

<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post">
	Nombre: <input TYPE="text" NAME="nombre"><br> 
	Edad: <input TYPE="text" NAME="edad"><br> 
	Email: <input TYPE="text" NAME="email"><br> 
	<input TYPE="submit" name="bAceptar" VALUE="aceptar">
</form>
</body>
</html>
<?php
} // En esta parte comprobamos los datos recibidos
else {
    $nombre = recoge("nombre");
    $edad = recoge('edad');
    $email = recoge('email');
    if ((cTexto($nombre) == 0)) {
        $error = true;
        $errores[]="El nombre esta mal";
    }
    if ((cNum($edad) == 0)) {
        $error = true;
        $errores[]="La edad esta mal";
    }
    if ((cEmail($email) == 0)) {
        $error = true;
        $errores[]="El email esta mal";
    }
    if (! $error) {
        header("location:correcto.php?nombre=$nombre&edad=$edad&email=$email");
    } else {
        
        ?>
<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD='post'>
	<?php 
	echo "Los datos que has introducido no están en el formato correcto, los fallos que tienes son:<br>";
	foreach ($errores as $error){
	    echo $error . "<br>";
	}
	echo "<br>";
	?>
	Nombre: <input TYPE="text" NAME="nombre"
		VALUE="<?php
        echo $nombre;
        ?>"> <br> Edad: <input TYPE="text" NAME="edad"
		VALUE="<?php
        echo $edad;
        ?>"> <br> Email: <input TYPE="text" NAME="email"
		VALUE="<?php
        echo $email;
        ?>"> <br>
		<?php
        echo '<input TYPE="submit" name="bAceptar" VALUE="aceptar">';
    }
}
?>
		  
</form>
<?php

pie();
?>