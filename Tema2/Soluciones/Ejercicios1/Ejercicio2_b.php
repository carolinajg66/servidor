<!DOCTYPE html>
<html lang="es">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   		<title>Ejemplo 2</title> 
		<style>
		  div {
		      border: 1px solid black;
		      width: 20%;
		      padding: 10px;
		  }
		</style>
	</head>
	<body>
<?php 

    $name = "Juan";
    $lastname = "Palomo Garcia";
    $age = "23";
    $dic = "C/ America 33";
    $cp = 34017;
    $phone = "596209934";
    $job = "Programador";
    
    echo "<div>Nombre: <b>$name</b><br>";
    echo "Apellidos: <b>$lastname</b><br>";
    echo "Edad: <b>$age</b><br>";
    echo "Domicilio: <b>$dic</b><br>";
    echo "Codigo Postal: <b>$cp</b><br>";
    echo "Telefono: <b>$phone</b><br>";
    echo "Profesión: <b>$job</b></div>";
?>
	</body>
</html>



