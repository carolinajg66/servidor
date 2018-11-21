<?php
require_once ('bGeneral.php');

function cabecera($titulo) // el archivo actual
{
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>
				<?php
    echo $titulo;
    ?>
			
			</title>
<meta charset="utf-8" />
</head>
<body>
<?php
}

function pie()
{
    echo "</body>
	</html>";
}

function sinTildes($frase)
{
    $no_permitidas = array(
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�",
        "�"
    );
    $permitidas = array(
        "a",
        "e",
        "i",
        "o",
        "u",
        "A",
        "E",
        "I",
        "O",
        "U",
        "a",
        "e",
        "i",
        "o",
        "u",
        "A",
        "E",
        "I",
        "O",
        "U"
    );
    $texto = str_replace($no_permitidas, $permitidas, $frase);
    return $texto;
}

function sinEspacios($frase)
{
    $texto = trim(preg_replace('/ +/', ' ', $frase));
    return $texto;
}

function recoge($var)
{
    if (isset($_REQUEST[$var]))
        $tmp = strip_tags(sinEspacios($_REQUEST[$var]));
    else
        $tmp = "";

    return $tmp;
}

function recogeArray($var)
{
    if (! empty($_REQUEST[$var])) {
        $array = $_REQUEST[$var];
        foreach ($array as $value) {
            $tmp[] = strip_tags(sinEspacios($value));
        }
    } else
        $tmp = "";

    return $tmp;
}

function cTexto($text)
{
    if (preg_match("/^[A-Za-zÑñ]+$/", sinTildes($text)))
        return 1;
    else
        return 0;
}

function cNum($num)
{
    if (preg_match("/^[0-9]+$/", $num))
        return 1;
    else
        return 0;
}

function cEmail($correo)
{
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        return 1;
    } else {
        return 0;
    }
}

function comprobarDatos($nombre, $nombreUsuario, $contrasenia, $email, $fechaNacimiento)
{
    if ((cTexto($nombre) == 0)) {
        $error = true;
        $errores[]="El nombre esta mal";
    }
    if ((cTexto($nombreUsuario) == 0)) {
        $error = true;
        $errores[]="El nombre de usuario esta mal";
    }
    if ((cNum($contrasenia) == 0)) {
        $error = true;
        $errores[]="La contraseña esta mal";
    }
    if ((cEmail($email) == 0)) {
        $error = true;
        $errores[]="El email esta mal";
    }
    if ((cNum($fechaNacimiento) == 0)) {
        $error = true;
        $errores[]="La fecha de nacimiento esta mal";
    }
    
}

