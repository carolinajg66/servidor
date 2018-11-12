<?php

//Ejercicio 1, EL ejercicio 2 es igual cambiando muy poco
function fecha(){
    
  $fechaArray = preg_split("/[MIRA LO QUE VA AQUI]", $fecha);
  
  if(count($fechaArray)==3){
      $dia= $fechaArray[0];
      $mes= $fechaArray[1];
      $anio= $fechaArray[2];
      
      if(checkdate($mes, $dia, $anio)==true){
          $fechita = mktime($mes, $dia, $anio);
          return $fechita;
      }else{
          return false;
      }
      
      
  }else{
      return false; 
  }
       
 
  

  
?>