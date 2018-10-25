<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
<?php

$pila = array('cinco' => 5, 'uno'=>1, 'cuatro'=>4, 'dos'=>2, 'tres'=>3);
asort($pila);
echo "<p>asort</p>";
 foreach ($pila as $key => $val) {
     echo "$key = $val\n";
 }

 echo "<br>";

 
 $pila = array('cinco' => 5, 'uno'=>1, 'cuatro'=>4, 'dos'=>2, 'tres'=>3);
 arsort($pila);
 foreach ($pila as $key => $val) {
     echo "$key = $val\n";
 }
 
 echo "<br>";
 $pila = array('cinco' => 5, 'uno'=>1, 'cuatro'=>4, 'dos'=>2, 'tres'=>3);
 ksort($pila);
 foreach ($pila as $key => $val) {
     echo "$key = $val\n";
 }
 
 echo "<br>";
 $pila = array('cinco' => 5, 'uno'=>1, 'cuatro'=>4, 'dos'=>2, 'tres'=>3);
 rsort($pila);
 foreach ($pila as $key => $val) {
     echo "$key = $val\n";
 }
 
 echo "<br>";
 $pila = array('cinco' => 5, 'uno'=>1, 'cuatro'=>4, 'dos'=>2, 'tres'=>3);
 sort($pila);
 foreach ($pila as $key => $val) {
     echo "$key = $val\n";
 }
 
?>


</body>
</html>