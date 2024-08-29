<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso POO PHP</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Caneta.php';
        
        $c1 = new Caneta;
        $c1 -> modelo = "BIC Cristal";
        $c1 -> cor = "Azul";

        $c1 -> destampar();
        $c1 -> rabiscar();
        

        print_r($c1);
    ?>
    </pre>
</body>
</html> 