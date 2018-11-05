<?php

function fecha(){
    
  $fecha=getdate();
       
    $fecha_valida = checkdate(2, 29, 2012);
    
    
    if ($fecha_valida){
        
      $fecha_con_formato = date("d/m/Y -- H:i:s",$fecha_valida);
      return $fecha_con_formato;
  
        
    }else{
        return 0;
    }

       
}

?>