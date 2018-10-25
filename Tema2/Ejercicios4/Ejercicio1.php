<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
<?php

$cadena = "anacaro@gmailco";

if(strpos($cadena,".")+2 < strlen($cadena) && strpos($cadena,"@")-2 >0 
    && (strpos($cadena,".") && strpos($cadena,"@"))){
    echo"Es valido";
}else{
    echo"No es valido";
}
    $trozoarroba = explode("@", $cadena);
    echo $trozoarroba[0];
?>

</body>
</html>

