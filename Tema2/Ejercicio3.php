<?php
$direccion = "medio";
switch($direccion)
{
    case ($direccion =="arriba"):
        echo "Estoy arriba";
        break;
        
    case ($direccion =="abajo"):
        echo "Estoy abajo";
        break;
        
    case ($direccion =="medio"):
        echo "Estoy en medio";
        break;
        
    case ($direccion =="otros"):
        echo "Estoy en una dirección indeterminada";
        break;
        
    
}

?>