<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Lutador.php';
        $l = array();   
        $l[0] = new Lutador("Julio", "Brasil", 18, 1.86, 74.6, 11, 0, 0);
        $l[1] = new Lutador("João", "Espanha", 24, 1.76, 90.5, 15, 4, 2);
        $l[2] = new Lutador("Luiz", "Alemão", 33, 1.63, 56.3, 8, 10, 17);
        $l[3] = new Lutador("Pedro", "Equador", 29, 1.80, 80.5, 3, 18, 6);
        $l[4] = new Lutador("Leonardo", "Albania", 42, 1.95, 118.9, 29, 3, 5);
        $l[5] = new Lutador("Carlos", "Sudão do Sul", 38, 1.88, 105.3, 16, 11, 14);
        $l[0] -> ganharLuta();
        $l[2] -> perderLuta();
        $l[5] -> empatarLuta();
        $l[0] -> status();
        $l[0] -> apresentar();
        $l[1] -> status();
        $l[1] -> apresentar();
        $l[2] -> status();
        $l[2] -> apresentar();
        $l[3] -> status();
        $l[3] -> apresentar();
        $l[4] -> status();
        $l[4] -> apresentar();
        $l[5] -> status();
        $l[5] -> apresentar();
       
        ?>
    </pre>
    </body>
</html>