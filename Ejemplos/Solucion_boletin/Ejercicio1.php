<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio 1</title>
</head>
<body>
<?php

/*

 *
 * Realiza una función que acepte una fecha como cadena con el
 * formato dd-mm-aaaa compruebe si la fecha es correcta y nos
 * devuelva la fecha en formato UNIX.
 */
function ValidaFecha($fecha)
{
    $fechaArray = preg_split("/[-\/]/", $fecha);
    if (count($fechaArray) == 3) {
        $dia = $fechaArray[0];
        $mes = $fechaArray[1];
        $anio = $fechaArray[2];

        if (checkdate($mes, $dia, $anio) == 'true') {
            $fechita = mktime($mes, $dia, $anio);
            return $fechita;
        } else {
            return false;
        }
    } else
        return false;
}

$str = "1/12/2017";
if (validaFecha($str) != false) {
    echo "La fecha es correcta <br>";

    echo validaFecha($str);
} else {
    echo "La fecha no es correcta";
}

?>
</body>
</html>