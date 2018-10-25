<!DOCTYPE html>
<html lang="es">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejercicio 1</title>
    </head>
<body>
<?php
$usuarios = array(
array("Colores fuertes", "rojo", "verde", "azul"),
array("Colores suaves", "Rosa", "Amarillo", "Malva"),
);


?>

<table border = "1">
<?php
	echo "<tr>";
	
		   echo "<td>". $usuarios[0][0]. "</td>";
		   echo "<td>". $usuarios[1][0]. "</td>";
		    
		 
			echo "<td></td>";
		    
		
		echo "</tr>";
	
?>
</table>

</body>
</html>
