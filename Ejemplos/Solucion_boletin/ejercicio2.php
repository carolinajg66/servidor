<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio</title>
</head>

<body>
<?php

/*
 * Realiza una función que acepte una fecha como cadena con el
 * formato aaaa-mm-dd compruebe si la fecha es correcta y nos devuelva
 * la fecha en formato UNIX.
 */
function comprobarFecha($cadFecha)
{
    $fecha = preg_split("/[-\/]/", $cadFecha);
    if (count($fecha) == 3) {
        $day = $fecha[2];
        $month = $fecha[1];
        $year = $fecha[0];

        if (checkdate($month, $day, $year)) {
            $fechaU = mktime(0, 0, 0, $month, $day, $year);
            return $fechaU;
        } else {
            return false;
        }
    } else
        return false;
}

$fecha = "2017-10-16";
if (comprobarFecha($fecha)) {
    echo "La fecha es válida";
} else {
    echo "La fecha no es correcta";
}

?>
</body>

</html>