<?php
$paises = array('España' => 'Madrid', 'Alemania'=>'Berlín', 'Portugal'=>'Lisboa', 'Irlanda'=>'Dublín', 'Italia'=>'Roma');

asort($paises);
foreach ($paises as $key => $val) {
    echo "La capital de $key es  $val";
    echo"<br>";
}




?>