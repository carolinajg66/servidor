<?php

    define("radio", 6.371);
    
    define("DistanciaSol", 149.6);
    
    define("PI", 3.1416);
    
    $a = 2* PI *radio;
    
    echo "La distancia de una vuelta al mundo = ".$a;
    
    $VueltasMundo = DistanciaSol / $a;
    
    echo "Cuantas vueltas al mundo equivale la distancia
           entre la Tierra y el Sol".$VueltasMundo;

?>