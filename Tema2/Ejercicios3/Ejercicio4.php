<?php
$array = ['España: Equipo 1'=>['portero'=>'Frank', 'Defensa'=>'Pepe', 'Medio'=>'Luis', 'Delantero' =>'Raul'],
    'España : Equipo 2'=>['portero'=>'Tiger', 'Defensa'=>'Mourin', 'Medio'=>'Katz', 'Delantero' =>'Alberto'],
    'Mexico'=>['portero'=>'Suarez', 'Defensa'=>'Koltz', 'Medio'=>'Ferandez', 'Delantero' =>'Ramirez'],
    'Argentina: Equipo 1'=>['portero'=>'Higuita', 'Defensa'=>'Mel', 'Medio'=>'Rubens', 'Delantero' =>'Messi'],
    'Argentina: Equipo 2'=>['portero'=>'Konstenmeiner', 'Defensa'=>'Lenkins', 'Medio'=>'Marash', 'Delantero' =>'Juanes']
];


foreach($array as $Pais=>$datos):
echo "<p>Pais: $Pais<br>";
foreach($datos as $dato=>$valor) {
    echo "$dato: $valor<br>";
}
echo "</p>";
endforeach;
?>
