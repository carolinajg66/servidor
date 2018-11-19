<?php
//Jaime
$cadena="16-10-2017";
$cadena2="13-01-2022";
function fecha($cad,$cad2){
    $aux=explode("-",$cad);
    $dia=$aux[0];
    $mes=$aux[1];
    $año=$aux[2];
    
    $aux2=explode("-",$cad2);
    $dia2=$aux2[0];
    $mes2=$aux2[1];
    $año2=$aux2[2];
    
    
    if(checkdate($mes, $dia, $año)){
        if(checkdate($mes2, $dia2, $año2)){
            $var1=mktime(0,0,0,$mes,$dia,$año);
            $var2=mktime(0,0,0,$mes2,$dia2,$año2);
            $dias=($var1-$var2)/(60*60*24);
            return round($dias);
        }else{
            return false;
        }
        
    }else{
        return false;
    }
    
}
echo fecha($cadena,$cadena2)." días han pasado";
?>