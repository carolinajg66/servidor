<?php
include ('bGeneral.php');
cabecera ($_SERVER ['PHP_SELF']); //el archivo actual
echo "Nombre:", recoge('nombre');
echo '<br>';
echo "Email:",recoge('email');
pie();
?>