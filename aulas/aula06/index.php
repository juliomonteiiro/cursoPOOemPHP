<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Controle.php';

        $c = new Controle();
        $c -> ligar();
        $c -> maisVolume();
        $c -> abrirMenu();
        
        ?>
    </pre>
    
</body>
</html>