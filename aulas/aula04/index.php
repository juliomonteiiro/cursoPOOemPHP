<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 POO</title>
</head>
<body>
    <pre>
    <?php 
    
    require_once 'Caneta.php';

    $c1 = new Caneta("Bic", "Azul", 0.7);
    $c2 = new Caneta("FaberCastell", "Vermelha", 1.0);


    print_r($c1);
    echo "<br>";
    print_r($c2);

    ?>
    </pre>
</body>
</html>