<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
<?php
/*php Define dos   constantes   que   contienen   datos   sobre   el 
 * planeta  Tierra:  su  radio  y  su  distancia  al  Sol  
 * (en  kilómetros) , otra más con el valor de Pi. 
 * Opera con estas constantes para obtener  la  distancia  de  una 
 * vuelta  al  mundo siguiendo el ecuador y muéstrala por pantalla 
 * (circunferencia =2 * PI * radio). Calcula también a cuantas vueltas 
 * al mundo equivale la distancia entre la Tierra y el Sol, y muéstra
 * lo por pantalla.
*/
define("radio", 63781);

define("distancia", 150000000);

define("PI", 3,14);


$circunferencia= 2*PI*radio;

$vueltas= distancia/$circunferencia;
$vueltasInt= $vueltas;

echo "ESTA ES LA DISTANCIA DE UNA VUELTA AL MUNDO: $circunferencia <br>";
echo "ESTAS SON LAS VULETAS QUE DARIAMOS AL MUNDO CON LA DISTANCIA DEL SOL: $vueltasInt";

?>

</body> 
</html> 