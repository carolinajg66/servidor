<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Ejercicio 4</title>
	</head>
	<body>

<?php
/* 
 * Programa que según el valor de una variable muestra un mensaje en
 * la pantalla u otro. Por ejemplo si es una variable que almacena una 
 * cadena, los posibles valores serán arriba, abajo, medio, otros; 
 * el mensaje sería “Estoy arriba”, en el caso de que el valor de la variable 
 * fuera arriba y así sucesivamente.
 */


$movi = "Arriba";
switch($movi){
    case "Arriba":
        echo "Estoy arriba.";
        break;
    case "Abajo":
        echo "Estoy abajo.";
        break;
    case "Medio":
        echo "Estoy en medio como el jueves.";
        break;
    default:
        echo "No es válido.";
}

?>

</body>
</html>
