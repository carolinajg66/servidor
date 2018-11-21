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

	$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","à","è","ì","ò","ù","À","È","Ì","Ò","Ù");
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
	if (preg_match("/^[A-Za-zÑñ]+$/", sinTildes($text)))
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

function comprobarDatos($error, $errores, $nombre, $nombreUsuario, $email, $contrasena, $fechaNacimiento){
    
    if ((cTexto($nombre) == 0)) {
        $error = true;
        $errores[]="El nombre esta mal";
    }
    if ((cTexto($nombreUsuario) == 0)) { //hacer function para nombreUsuario
        $error = true;
        $errores[]="El nombre de Usuario esta mal";
    }
    if ((cEmail($email) == 0)) {
        $error = true;
        $errores[]="El email esta mal";
    }
    if ((cNum($contrasena) == 0)) { //hacer function para contrasena
        $error = true;
        $errores[]="La contraseña esta mal";
    }
    
    if ((cTexto($fechaNacimiento) == 0)) { //hacer functon para fechaNAcimietno
        $error = true;
        $errores[]="La fecha de nacimiento esta mal";
    }
}

function escribirFichero($rutaCompleta,$nombre, $nombreUsuario, $email, $contrasena, $fechaNacimiento,$mensaje){
    
    if($archivo = fopen($rutaCompleta, "a+")){
        /*Escribimos
         * Introducimos cada línea con su salto, lo podemos hacer con la
         *constante PHP_EOL o con \r\n para Windows*/
        fwrite($archivo, "Nombre.$nombre.".PHP_EOL);
        /*fwrite($archivo, "...pon las tuyas a remojar ".PHP_EOL);*/
        //Si no rebobino no puedo leer porque tengo el puntero al final
        rewind ($archivo);
        //Guardo tamaño completo para lectura con fread
        $tamano = filesize($rutaCompleta);
        $texto = fread($archivo, $tamano);
        $mensaje.= nl2br($texto);
        //Vuelvo a posicionarme al principio del fichero
       // rewind ($archivo);
        /* Con gets puedo o no utilizaar nl2br porque lee una línea en cada llamada y
         * puedo añadir <br> al final de cada linea
         * Para leer todo el fichero tengo q utilizar un bucle con feof (fin de fichero) como
         * condición de fin de lectura
         */
       /* $mensaje.= "<br> Pruebo con fgets <br>";
        while(!feof($archivo)) {
            $linea = fgets($archivo);
            $mensaje.= nl2br($linea);
        }*/
        fclose($archivo);
    }
}

function escribir($nombre, $nombreUsuario,$email,$contrasena, $fechaNacimiento){
    $archivo = "ficheros/datos.txt";
    $mascontenido = "Nombre: ".$nombre.PHP_EOL."Nombre Usuario: ".$nombreUsuario.PHP_EOL
                    ."E-mail: ".$email.PHP_EOL."Contraseña: ".$contrasena.PHP_EOL."Fecha de nacimiento: ".$fechaNacimiento.PHP_EOL;
    // También vamos a emplear la bandera LOCK_EX para evitar cualquier modificación mientras:
    file_put_contents($archivo, $mascontenido, FILE_APPEND);
    $actual = file_get_contents($archivo);
    //echo nl2br($actual);
    
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