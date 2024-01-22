<!--Declarar en un array asociativo las 3 notas de un alumno-->
<!--Visualizar la media-->

<?php

$notas= [
    "trimestre1" => 10,
    "trimestre2" => 6,
    "trimestre3" => 8,
];

function Media($tab){

    $suma = 0;
    foreach ($tab as $valor) {
        $suma += $valor;
    }
    $media = $suma / count($tab);
    return $media;

}

function Visualizar($med){
    
    echo Media($med);
    
}

Visualizar($notas);

?>