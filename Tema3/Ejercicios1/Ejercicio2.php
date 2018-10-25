<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
<?php
switch ($_REQUEST["numero"]) {
    case ($_REQUEST["numero"] == 1):
        for ($tabla = 1; $tabla <= 1; $tabla ++) {
            echo "<h2>Tabla del $tabla </h2>";

            for ($i = 1; $i <= 10; $i ++) {
                echo "$tabla x $i = " . ($tabla * $i) . "<br/>";
            }
        }
        break;

    case ($_REQUEST["numero"] == 2):
        for ($tabla = 2; $tabla <= 2; $tabla ++) {
            echo "<h2>Tabla del $tabla </h2>";

            for ($i = 1; $i <= 10; $i ++) {
                echo "$tabla x $i = " . ($tabla * $i) . "<br/>";
            }
        }
        break;
    case ($_REQUEST["numero"] == 3):
        for ($tabla = 3; $tabla <= 3; $tabla ++) {
            echo "<h2>Tabla del $tabla </h2>";

            for ($i = 1; $i <= 10; $i ++) {
                echo "$tabla x $i = " . ($tabla * $i) . "<br/>";
            }
        }
        break;
    case ($_REQUEST["numero"] == 4):
        for ($tabla = 4; $tabla <= 4; $tabla ++) {
            echo "<h2>Tabla del $tabla </h2>";

            for ($i = 1; $i <= 10; $i ++) {
                echo "$tabla x $i = " . ($tabla * $i) . "<br/>";
            }
        }
        break;
    case ($_REQUEST["numero"] == 5):
        for ($tabla = 5; $tabla <= 5; $tabla ++) {
            echo "<h2>Tabla del $tabla </h2>";

            for ($i = 1; $i <= 10; $i ++) {
                echo "$tabla x $i = " . ($tabla * $i) . "<br/>";
            }
        }
        break;
    case ($_REQUEST["numero"] == 6):
        for ($tabla = 6; $tabla <= 6; $tabla ++) {
            echo "<h2>Tabla del $tabla </h2>";

            for ($i = 1; $i <= 10; $i ++) {
                echo "$tabla x $i = " . ($tabla * $i) . "<br/>";
            }
        }
        break;
    case ($_REQUEST["numero"] == 7):
        for ($tabla = 7; $tabla <= 7; $tabla ++) {
            echo "<h2>Tabla del $tabla </h2>";

            for ($i = 1; $i <= 10; $i ++) {
                echo "$tabla x $i = " . ($tabla * $i) . "<br/>";
            }
        }
        break;
    case ($_REQUEST["numero"] == 8):
        for ($tabla = 8; $tabla <= 8; $tabla ++) {
            echo "<h2>Tabla del $tabla </h2>";

            for ($i = 1; $i <= 10; $i ++) {
                echo "$tabla x $i = " . ($tabla * $i) . "<br/>";
            }
        }
        break;
    case ($_REQUEST["numero"] == 9):
        for ($tabla = 9; $tabla <= 9; $tabla ++) {
            echo "<h2>Tabla del $tabla </h2>";

            for ($i = 1; $i <= 10; $i ++) {
                echo "$tabla x $i = " . ($tabla * $i) . "<br/>";
            }
        }
        break;
    case ($_REQUEST["numero"] == 10):
        for ($tabla = 10; $tabla <= 10; $tabla ++) {
            echo "<h2>Tabla del $tabla </h2>";

            for ($i = 1; $i <= 10; $i ++) {
                echo "$tabla x $i = " . ($tabla * $i) . "<br/>";
            }
        }
        break;
    default:
        echo "Has introducido un número no valido.Introduce un numero que sea entre el 1 y el 10.";
}

?>
<p><a href="Ejercicio2.html">Volver.</a></p>
</body>
</html>