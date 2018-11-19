<?php
include ('bGeneral.php');
cabecera ($_SERVER ['PHP_SELF']); //el archivo actual
echo "Nombre:", recoge('nombre');
echo '<br>';
echo "Edad:", recoge('edad');
echo '<br>';
echo "Email:",recoge('email');
pie();
?>