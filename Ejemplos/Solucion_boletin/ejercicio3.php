<!-- 3.	Realiza una función que reciba la fecha en formato UNIX y devuelva la fecha
 en formato dd-mm-aaaa y aaaa-mm-dd según un segundo argumento que le pasemos a la función.-->
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ejercicio3</title>


</head>
<body>
	
	<?php

/*
 * SEGUNDO PARÁMETRO:
 * 1 -> FORMATO dd/mm/aaaa
 * 2 -> FORMATO aaaa/mm/dd
 */
function conversion_unix_fecha($fechaUnix, $formato = 1)
{
    if (is_int($fechaUnix)) {

        switch ($formato) {
            case 1:
                return $fecha_formato = date("d/m/Y");
                break;

            case 2:
                return $fecha_formato = date("Y/m/d");
                break;

            default:
                return 0;
        }
    } else
        return 0;
}

if(($fecha=conversion_unix_fecha(26948400)))
{
    echo "La fecha en UNIX 263948400 es : $fecha";
}else 
    echo "Los datos introducidos no son correctos";
?>
		    
		</body>
</html>
