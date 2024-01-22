<!--Almacenar en un array las notas de un alumno-->
<!--Visualizar las notas superiores a la media-->

<?php
$notas = array(3, 4, 5, 7);

function Media($tab)
{
    $suma = 0;
    foreach ($tab as $valor) {
        $suma += $valor;
    }
    $media = $suma / count($tab);
    return $media;
}

function Visualizar($notas)
{
    $media = Media($notas);

    echo "Notas superiores a la media:\n";

    foreach ($notas as $nota) {
        if ($nota > $media) {
            echo $nota . "\n";
        }
    }
}

Visualizar($notas);
?>
