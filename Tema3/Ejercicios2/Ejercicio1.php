<?php 
include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
if (! isset($_REQUEST['bAceptar'])) {

?>

<html lang="es">
<head>
<title>Ejercicio 1</title>
</head>
<body>
<form ACTION="<?=$_SERVER ['PHP_SELF'] ?>" METHOD="post">

Codigo postal: <input type="text" name="codigoPostal" size="5"><br>

<input type="submit" value="Enviar" name="enviar">
</form>
</body>
</html>

<?php
}else{
    
    $CodigoPostal=recoge("codigoPostal");
    
    if (($codigoPostal) == 0) {
        
    
    
}
	
	

?>

