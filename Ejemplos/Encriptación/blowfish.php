<?php 


//Función que encripta el password utilizando blowfish con salt fijo 
function crypt_blowfish($password) {

$salt = '$2a$07$usesomesillystringforsalt$';
$pass= crypt($password, $salt);

echo "<br> SALT $salt <br>" ;
return $pass;
}


$passwordEntra ="cocacola";
/*$passwordBD es lo que almacenariamos en la BD
 * Cuidado que genera un string que puede llegar a 72 caracteres
 */

$passwordBD = crypt_blowfish ($passwordEntra);
echo $passwordBD;
echo '<br>';

/*
 * Cuando el usuario intenta registrarse en nuestro sistema
 * Comprobamos si la contraseña que introduce en el formulario de entrada 
 * encriptada con el mismo método y el mismo salt son iguales
 * Para esto utilizamos la función crypt pasándole como salt la contraseña 
 * encriptada que tenemos en la BD.
 * 
 */
$pass=crypt($passwordEntra, $passwordBD);
echo $pass;
echo '<br>';
if( $pass == $passwordBD) {
echo 'Es igual';
}

?>