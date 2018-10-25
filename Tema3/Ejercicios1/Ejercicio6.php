<!DOCTYPE html>
<html lang="es">
<head>
<meta 
http-equiv="Content-Type" 
content="text/html; charset=utf-8">
<title>Ejercicio 3</title>
</head>
<body>
<form method="POST" action="Ejercicio6.php">

Nombre <input type="text" name="nombre" size="20"><br>
Edad   <input type="text" name="edad"   size="3" ><br>
E-mail <input type="text" name="email"  size="50"><br>

<input type="submit" value="Enviar" name="enviar">
</form>


<?php

if (isset($_POST[‘enviar’])){
    
    $nombre=$_REQUEST("nombre");
    $edad=$_REQUEST("edad");
    $email=$_REQUEST("email");

	echo "El nombre es".nombre;
	echo "El nombre es".edad;
	echo "El nombre es".email;
	
	
	
	
	
    
}

?>

</body>
</html>