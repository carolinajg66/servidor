<?php
$animales = array(
    'rata.jpg', 'pinguino.jpg', 'ardilla-voladora.jpg');

    $num = rand(0,2);

    echo '<img src="img/' . $animales[$num] . '">';
?>