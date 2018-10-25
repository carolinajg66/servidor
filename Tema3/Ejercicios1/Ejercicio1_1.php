<!DOCTYPE html>
<html lang="es">
<head>
<meta 
http-equiv="Content-Type" 
content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
<?php


if( $_REQUEST["numero"]%2==0){
    
    echo "El ".$_REQUEST["numero"]." es par";
}else{
    echo "El ".$_REQUEST["numero"]." es impar";
}
    
?>

<p><a href="Ejercicio1.html">Volver.</a></p>

</body>
</html>