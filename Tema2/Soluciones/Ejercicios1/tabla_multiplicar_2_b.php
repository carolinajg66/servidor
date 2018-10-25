<!DOCTYPE html>
<html lang="es">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 7</title>
    </head>
<body>
<?php
/*
 * Crea una tabla con 11 filas y 9 columnas, de manera que muestre
 * las tablas de del 1 al 9. La primera fila corresponde al encabezado.
 */


$filas = 11;
$columnas = 9;
$num = 1;
?>

<table border = "1">
<?php

	for($i = 1; $i < $filas; $i++){
		echo "<tr>";
		
		for($j = 1; $j <= $columnas; $j++){
		    if($i == 1){
		        echo "<td> Tabla del $num </td>";
		        $num++;
		    }
		    else{
			echo "<td> $j x $i = " . $i * $j . "</td>";
		    }
		}
		echo "</tr>";
	}
?>
</table>

</body>
</html>
