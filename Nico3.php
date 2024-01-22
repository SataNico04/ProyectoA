<!--Dado un numero en una variable alterar el contenido de esa variable-->
<!--por el opuesto ej. 5 -> -5 -->

<?php
    $var=5;
    function Cambiar($variable){
        $variable *= -1;
        return $variable;
    }
    function Visualizar($numero){
        echo Cambiar($numero);
    }
    Visualizar($var);
?>