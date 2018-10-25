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


echo '<table style="width:100%" border="1">';

echo '<tr>';
for ($i = 1; $i <= 9; $i++) {
    echo '<th>Tabla del '.$i.'</th>';
}
echo '</tr>';

for ($i = 0; $i <= 9; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 9; $j++) {
        echo "<td> $j x $i = " . ($i*$j) . "</td>";
    }
    echo '</tr>';
}
echo "</table>"; 



?>
	</body>
</html>
