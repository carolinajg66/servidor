<?php

function cabecera($titulo) //el archivo actual
{
    ?>
<!DOCTYPE html>
		<html lang="es">
			<head>
				<title>
				<?php
				echo $titulo;
				?>
			
			</title>
				<meta charset="utf-8"/>
			</head>
		<body>
<?php		
}

function pie(){
	echo "</body>
	</html>";
}

function sinTildes($frase) {

	$no_permitidas= array ("Ã¡","Ã©","Ã­","Ã³","Ãº","Ã�","Ã‰","Ã�","Ã“","Ãš","Ã ","Ã¨","Ã¬","Ã²","Ã¹","Ã€","Ãˆ","ÃŒ","Ã’","Ã™");
	$permitidas= array ("a","e","i","o","u","A","E","I","O","U","a","e","i","o","u","A","E","I","O","U");
	$texto = str_replace($no_permitidas, $permitidas ,$frase);
	return $texto;
}

function sinEspacios($frase) {
	$texto = trim(preg_replace('/ +/', ' ', $frase));
	return $texto;
}

function recoge($var)
{
	if (isset($_REQUEST[$var]))
		$tmp=strip_tags(sinEspacios($_REQUEST[$var]));
	else 
		$tmp= "";
	
	return $tmp;
}


function cTexto ($text)
{
	if (preg_match("/^[A-Za-zÃ‘Ã±]+$/", sinTildes($text)))
		return 1;
	else 
		return 0;
}
function cNum ($num)
{
    if (preg_match("/^[0-9]+$/", $num))
        return 1;
        else
            return 0;
}
function cEmail ($correo)
{
    if (filter_var($correo, FILTER_VALIDATE_EMAIL) ) {
        return 1;
    }else{
        return 0;
    }
}

function subidaArchivos(&$errores,$imagen,$extensionesValidas,$dir,$max_file_size ){
    
    if ($_FILES['imagen']['error'] != 0) {
        $errores[] ='Error: ';
       /* echo 'Error: ';*/
        switch ($_FILES['imagen']['error']) {
            case 1:
                $errores[] ="UPLOAD_ERR_INI_SIZE <br>";
                $errores[] = "Fichero demasiado grande<br>";
                /*
                echo "UPLOAD_ERR_INI_SIZE <br>";
                echo "Fichero demasiado grande<br>";
                */
                break;
            case 2:
                $errores[] ="UPLOAD_ERR_FORM_SIZE<br>";
                $errores[] ='El fichero es demasiado grande<br>';
                /*echo "UPLOAD_ERR_FORM_SIZE<br>";
                echo 'El fichero es demasiado grande<br>';*/
                break;
            case 3:
                $errores[] ="UPLOAD_ERR_PARTIAL<br>";
                $errores[] ='El fichero no se ha podido subir entero<br>';
                /*
                echo "UPLOAD_ERR_PARTIAL<br>";
                echo 'El fichero no se ha podido subir entero<br>';*/
                break;
            case 4:
                $errores[] ="UPLOAD_ERR_NO_FILE<br>";
                $errores[] ='No se ha podido subir el fichero<br>';
               /* echo "UPLOAD_ERR_NO_FILE<br>";
                echo 'No se ha podido subir el fichero<br>';*/
                break;
            case 6:
                $errores[] ="UPLOAD_ERR_NO_TMP_DIR<br>";
                $errores[] ="Falta carpeta temporal<br>";
               /* echo "UPLOAD_ERR_NO_TMP_DIR<br>";
                echo "Falta carpeta temporal<br>";*/
            case 7:
                $errores[] ="UPLOAD_ERR_CANT_WRITE<br>";
                $errores[] ="No se ha podido escribir en el disco<br>";
               /* echo "UPLOAD_ERR_CANT_WRITE<br>";
                echo "No se ha podido escribir en el disco<br>";
                */
            default:
                $errores[] ='Error indeterminado.';
               /*echo 'Error indeterminado.';*/
        }
        return 0;
    } else {
        // Guardamos el nombre original del fichero
        $nombreArchivo = $_FILES['imagen']['name'];
        // Guardamos tamaño fichero
        $filesize = $_FILES['imagen']['size'];
        // Guardamos nombre del fichero en el servidor
        $directorioTemp = $_FILES['imagen']['tmp_name'];
        // Guardamos la información del archivo en un array
        $arrayArchivo = pathinfo($nombreArchivo);
        /*
         * Extraemos la extensión del fichero, desde el último punto. Si hubiese doble extensión, no lo
         * tendría en cuenta.
         */
        $extension = $arrayArchivo['extension'];
        // Comprobamos la extensión del archivo dentro de la lista que hemos definido al principio
        if (! in_array($extension, $extensionesValidas)) {
            $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";
        }
        // Comprobamos el tamaño del archivo
        if ($filesize > $max_file_size) {
            $errores[] = "La imagen debe de tener un tamaño inferior a 50 kb";
        }
        print_r($errores);
        // Almacenamos el archivo en ubicación definitiva si no hay errores
        if (empty($errores)) {
            // Añadimo time() al nombre del fichero, así lo haremos único y si tuviera doble extensión
            // Haríamos inservible la segunda.
         
            $nombreArchivo = $arrayArchivo['filename'] . time();
            $nombreCompleto = $dir . $nombreArchivo . "." . $extension;
            // Movemos el fichero a la ubicación definitiva
            if (move_uploaded_file($directorioTemp, $nombreCompleto)) {
                return $nombreCompleto;
                /*$errores[] ="<br> El fichero \"$nombreCompleto\" ha sido guardado";
                echo "<br> El fichero \"$nombreCompleto\" ha sido guardado";*/
            } else {
                return 0;
                
               /* echo "Error: No se puede mover el fichero a su destino";*/
            }
        }
    }
return 0;
    
    
    
}

?>

