<?php
include ('general.php');
cabecera($_SERVER['PHP_SELF']);

$errores = array();
if (! isset($_REQUEST['bAceptar'])) {//si no se ha apretado el boton baceptar
    ?>
//Te hace esto
<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post">
	Dia: <input TYPE="text" NAME="dia"><br> 
	Mes: <input TYPE="text"NAME="mes"><br> 
	Año: <input TYPE="text" NAME="Año"><br> 
	<input TYPE="submit" name="bAceptar" VALUE="aceptar">
</form>
</body>
</html>
<?php
} // En esta parte comprobamos los datos recibidos
else {
    
}