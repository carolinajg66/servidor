<?php
$numerodado = rand(1,6);
echo $numerodado;

$array = array ("Uno", "Dos", "tres", "Cuatro", "Cinco", "Seis");

foreach ($array as $numero){
    if($numerodado == 1){
        echo $numero[1];
    }else if($numerodado == 2){
        echo $numero[2];
    }else if ($numerodado == 3){
        echo $numero[3];
    }else if ($numerodado == 4){
        echo $numero[4];
    }else if ($numerodado == 5){
        echo $numero[5];
    }else if ($numerodado == 6){
        echo $numero[6];
        
    }
    
    
}



?>