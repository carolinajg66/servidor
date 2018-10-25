<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$jugador= array("Crovic","Antic","Malic","Zulic","Rostrich");
echo "La alineación del equipo está compuesta por ";
for($i=0;$i<count($jugador);$i++){
    if($i==(count($jugador)-2)){
        echo $jugador[$i] . " y ";
    }
    elseif ($i==(count($jugador)-1)){
        echo $jugador[$i];
    }
    elseif ($i<count($jugador)){
        echo $jugador[$i] . ", ";
    }
}
?>
</p> 
</body> 
</html> 