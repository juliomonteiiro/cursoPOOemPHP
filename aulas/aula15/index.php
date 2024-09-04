<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco Aula 15 Exercícios</title>
</head>
    <body>
        <pre>
        <?php

            require_once 'Video.php';
            require_once 'AcoesVideo.php';
            require_once 'Pessoa.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';

            $v[0] = new Video("Aula 14 POO");
            $v[1] = new Video("Aula React");
            $v[2] = new Video("Aula Python");

            $g[0] = new Gafanhoto("Julio", 18, "M", "juliomonteiiro");

            $vis[0] = new Visualizacao($g[0], $v[0]);
            $vis[1] = new Visualizacao($g[0], $v[1]);

            $vis[0]->avaliar();
            $vis[1]->avaliarPorc(85);

            print_r($vis);


        ?>
        </pre>
    </body>
</html>