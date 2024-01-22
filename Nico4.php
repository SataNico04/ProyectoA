<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $var = $_POST['numero'];

        function Cambiar($variable){
            $variable *= -1;
            return $variable;
        }

        function Visualizar($numero){
            echo Cambiar($numero);
        }

        Visualizar($var);
    }
?>
