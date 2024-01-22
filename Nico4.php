<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="numero">Enter a number:</label>
        <input type="text" name="numero">
        <button type="submit">Submit</button>
    </form>
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
</body>
</html>
