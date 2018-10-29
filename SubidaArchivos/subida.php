<?php
include ('bGeneral.php');
// Cargamos cabecera html
cabecera('ejemplo.php');
// Si no hemos pulsado el bot�n aceptar => cargamos el formulario
If (! isset($_REQUEST['bAceptar'])) {
    ?>
<html>
<h1>Subida de ficheros</h1>
<form method="post" action="EjemploSubida.php"
	enctype="multipart/form-data">
	<input type="file" name="imagen" id="imagen" /> <input type="submit"
		name="bAceptar" value="Subir fichero" />
</form>
</html>
<?php
} else {
    // Carpeta para ubicaci�n definitiva. Ruta relativa al fichero actual.
    // Tiene que estar creada esta carpeta, sino da error
    $dir = "archivos/";
    // Tama�o m�ximo aceptado, si queremos que sea inferior al configurado en php.ini
    $max_file_size = "51200";
    // Creamos una lista de extensiones v�lidas, por seguridad es lo m�s v�lido.
    $extensionesValidas = array(
        "jpg",
        "png",
        "gif"
    );
    
    echo "<pre>";
    print_r($_REQUEST);
    print_r($_FILES);
    echo "</pre>";
    /*
     * Comprobamos si hay un error al subirlo. Si ha habido alg�n error al subir no ser� necesario
     * comprobar nada m�s
     */
    
    if ($_FILES['imagen']['error'] != 0) {
        echo 'Error: ';
        switch ($_FILES['imagen']['error']) {
            case 1:
                echo "UPLOAD_ERR_INI_SIZE <br>";
                echo "Fichero demasiado grande<br>";
                break;
            case 2:
                echo "UPLOAD_ERR_FORM_SIZE<br>";
                echo 'El fichero es demasiado grande<br>';
                break;
            case 3:
                echo "UPLOAD_ERR_PARTIAL<br>";
                echo 'El fichero no se ha podido subir entero<br>';
                break;
            case 4:
                echo "UPLOAD_ERR_NO_FILE<br>";
                echo 'No se ha podido subir el fichero<br>';
                break;
            case 6:
                echo "UPLOAD_ERR_NO_TMP_DIR<br>";
                echo "Falta carpeta temporal<br>";
            case 7:
                echo "UPLOAD_ERR_CANT_WRITE<br>";
                echo "No se ha podido escribir en el disco<br>";
            
            default:
                echo 'Error indeterminado.';
        }
    } else {
        // Guardamos el nombre original del fichero
        $nombreArchivo = $_FILES['imagen']['name'];
        // Guardamos tama�o fichero
        $filesize = $_FILES['imagen']['size'];
        // Guardamos nombre del fichero en el servidor
        $directorioTemp = $_FILES['imagen']['tmp_name'];
        // Guardamos la informaci�n del archivo en un array
        $arrayArchivo = pathinfo($nombreArchivo);
        /*
         * Extraemos la extensi�n del fichero, desde el �ltimo punto. Si hubiese doble extensi�n, no lo
         * tendr�a en cuenta.
         */
        $extension = $arrayArchivo['extension'];
        // Comprobamos la extensi�n del archivo dentro de la lista que hemos definido al principio
        if (! in_array($extension, $extensionesValidas)) {
            $errores[] = "La extensi�n del archivo no es v�lida o no se ha subido ning�n archivo";
        }
        // Comprobamos el tama�o del archivo
        if ($filesize > $max_file_size) {
            $errores[] = "La imagen debe de tener un tama�o inferior a 50 kb";
        }
        
        // Almacenamos el archivo en ubicaci�n definitiva si no hay errores
        if (empty($errores)) {
            // A�adimo time() al nombre del fichero, as� lo haremos �nico y si tuviera doble extensi�n
            // Har�amos inservible la segunda.
            $nombreArchivo = $arrayArchivo['filename'] . time();
            $nombreCompleto = $dir . $nombreArchivo . "." . $extension;
            // Movemos el fichero a la ubicaci�n definitiva
            if (move_uploaded_file($directorioTemp, $nombreCompleto)) {
                echo "<br> El fichero \"$nombreCompleto\" ha sido guardado";
            } else {
                echo "Error: No se puede mover el fichero a su destino";
            }
        }
    }
}

?>
</body>
</html>