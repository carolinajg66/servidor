<?php

for($tabla=1; $tabla<=9; $tabla++) 
{
 echo "<h2>Tabla del $tabla </h2>";
 

 for($i=1; $i<=9; $i++) 
 {
  echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
 }
}
?>