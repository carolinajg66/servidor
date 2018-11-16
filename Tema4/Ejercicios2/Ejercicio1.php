<?php 

function escribirTresNumeros($numero1, $numero2, $numero3){
    
    $rutaCompleta="ficheros/datosEjercicio.txt.txt";
    
    if($archivo = fopen($rutaCompleta, "a+")){
        fwrite($archivo, $numero1.PHP_EOL);
        fwrite($archivo, $numero2.PHP_EOL);
        
        rewind ($archivo);
        $tamano = filesize($rutaCompleta);
        $texto = fread($archivo, $tamano);
        $mensaje.= nl2br($texto);
        
        rewind ($archivo);
        
        $mensaje.= "<br> Pruebo con fgets <br>";
        while(!feof($archivo)) {
            $linea = fgets($archivo);
            $mensaje.= nl2br($linea);
        }
        return true;
        fclose($archivo);
        
    }else{
        return false; 
    }
    
    echo ($mensaje);
    ?>

}


?>