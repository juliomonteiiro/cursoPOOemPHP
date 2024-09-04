<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco Aula 13 polimorfismo</title>
</head>
<body>
    <pre>
        <?php


            require_once 'Animal.php';
            require_once 'Mamifero.php';
            require_once 'Cachorro.php';
            require_once 'Lobo.php';

            $c = new Cachorro();

            $c -> reagirFrase("Olá");
            $c -> reagirFrase("Vai apanhar");
            $c -> reagirHora(11, 45);
            $c -> reagirHora(21, 00);
            $c -> reagirDono(true);
            $c -> reagirDono(false);
            $c -> reagirIdade(2, 12.5);
            $c -> reagirIdade(17, 4.5);




        ?>
    </pre>
    </body>
</html>