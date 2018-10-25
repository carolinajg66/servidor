<?php
$email_a = 'joe@example.com';
$email_b = 'bogus';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "Esta dirección de correo ($email_a) es válida.";
}

if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "Esta dirección de correo ($email_b) es válida.";
}else{
    echo"No es valida";
}
?>
