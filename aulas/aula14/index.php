<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco Aula 14 Exercícios</title>
</head>
    <body>
        <pre>
        <?php

            require_once 'Video.php';
            require_once 'AcoesVideo.php';
            require_once 'Pessoa.php';
            require_once 'Gafanhoto.php';

            $v[0] = new Video("Aula 14 POO");
            $v[1] = new Video("Aula React");
            $v[2] = new Video("Aula Python");

            $p = new Gafanhoto("Julio", 18, "M", "juliomonteiiro");
            print_r($v);
            print_r($p);


        ?>
        </pre>
    </body>
</html>
