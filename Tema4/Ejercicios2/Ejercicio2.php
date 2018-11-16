<?php 
function obtenerSuma($rutaCompleta){
    
    if(is_file($rutaCompleta)){
        
        if ($archivo = fopen($rutaCompleta, "r")) {
            
            while (!feof($fp)){
                $linea = fgets($fp);
                echo $linea;
                $array= array($linea);
            }
            
            
        }
    }
    
    
    
}

?>




