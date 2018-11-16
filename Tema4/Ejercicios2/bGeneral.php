<?php
require_once ('bGeneral.php');
function cabecera($titulo) //el archivo actual
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
				<meta charset="utf-8"/>
			</head>
		<body>
<?php		
}

function pie(){
	echo "</body>
	</html>";
}

function sinTildes($frase) {

	$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","à","è","ì","ò","ù","À","È","Ì","Ò","Ù");
	$permitidas= array ("a","e","i","o","u","A","E","I","O","U","a","e","i","o","u","A","E","I","O","U");
	$texto = str_replace($no_permitidas, $permitidas ,$frase);
	return $texto;
}

function sinEspacios($frase) {
	$texto = trim(preg_replace('/ +/', ' ', $frase));
	return $texto;
}

function recoge($var)
{
	if (isset($_REQUEST[$var]))
		$tmp=strip_tags(sinEspacios($_REQUEST[$var]));
	else 
		$tmp= "";
	
	return $tmp;
}


function recogeArray($var)
{
    if (!empty($_REQUEST[$var])){
        $array=$_REQUEST[$var];
        foreach ($array as $value){
            $tmp[]=strip_tags(sinEspacios($value));
        }
    }else
        $tmp= "";
    

    return $tmp;
}

