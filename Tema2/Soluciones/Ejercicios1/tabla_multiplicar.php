<!DOCTYPE html>
<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 4</title>
</head>
<body>

<?php
/*Crea listado con las tablas de multiplicar del 1 al 9. 
 *Al iniciar cada tabla aparecerá un encabezado.
 */

for ($i = 1; $i < 10; $i++) {
    echo '<table bgcolor="#cccccc" border="5">';
    echo '<tr>';
    echo '<td align="center">';
    echo "<strong>Tabla del $i </strong>";
    echo '</td></tr>';
    for ($x =0; $x <= 10; $x++) {
        echo '<tr><td>';
        echo "$i x $x = ".($i*$x)."";
        echo '</td></tr>';
        if ($x==10) {
            echo '</table>';
            echo "<br>";
        }
    }
    
}
?>

</body>
</html>
