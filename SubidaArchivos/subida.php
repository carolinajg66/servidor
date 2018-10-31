<?php
include ('bGeneral.php');
// Cargamos cabecera html
cabecera('ejemplo.php');
// Si no hemos pulsado el botón aceptar => cargamos el formulario
If (! isset($_REQUEST['bAceptar'])) {
    ?>
<html>
<h1>Subida de ficheros</h1>
<form method="post" action="subida.php"
	enctype="multipart/form-data">
	<input type="file" name="imagen" id="imagen" /> <input type="submit"
		name="bAceptar" value="Subir fichero" />
</form>
</html>
<?php
} else {
    // Carpeta para ubicación definitiva. Ruta relativa al fichero actual.
    // Tiene que estar creada esta carpeta, sino da error
    $dir = "archivos/";
    // Tamaño máximo aceptado, si queremos que sea inferior al configurado en php.ini
    $max_file_size = "51200";
    // Creamos una lista de extensiones válidas, por seguridad es lo más válido.
    $extensionesValidas = array(
        "jpg",
        "png",
        "gif",
        "pdf"
    );
    
    echo "<pre>";
    print_r($_REQUEST);
    print_r($_FILES);
    echo "</pre>";
    /*
     * Comprobamos si hay un error al subirlo. Si ha habido algún error al subir no será necesario
     * comprobar nada más
     */
    $errores;
    subidaArchivos($errores,"imagen",$extensionesValidas,$dir,$max_file_size);
}

?>
</body>
</html>