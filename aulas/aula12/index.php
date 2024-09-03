<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco Aula 12 Herança</title>
</head>
<body>
    <pre>
        <?php 

            require_once 'Animal.php';
            require_once 'Ave.php';
            require_once 'Mamifero.php';
            require_once 'Peixe.php';
            require_once 'Reptil.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';


            // $n = new Animal();

            // $a = new Ave();

            // $a -> setPeso(0.65);
            // $a -> setIdade(2);
            // $a -> setMembros (2);
            // $a -> locomover();
            // $a -> alimentar();
            // $a -> emitirSom();
            // $a -> fazerNinho();
            // $a -> setCorPena("Amarelo");
            
            // print_r($a);
            
             // print_r($m);

            // $p = new Peixe();

            // $p -> setPeso(1.41);
            // $p -> setIdade(1);
            // $p -> setMembros (0);
            // $p -> locomover();
            // $p -> alimentar();
            // $p -> emitirSom();
            // $p -> soltarBolha();
            // $p -> setCorEscama("Prata");
            
            // print_r($p);

            // $r = new Reptil();

            // $r -> setPeso(3.65);
            // $r -> setIdade(8);
            // $r -> setMembros (4);
            // $r -> locomover();
            // $r -> alimentar();
            // $r -> emitirSom();
            // $r -> setCorEscama("Marrom");
            
            // print_r($r);


            $m = new Mamifero();
            $c = new Canguru();
            $k = new Cachorro();

            $m -> setPeso(5.78);
            $m -> setIdade(8);
            $m -> setMembros (4);
            $m -> locomover();
            $m -> alimentar();
            $m -> emitirSom();
            $m -> setCorPelo("Branco");

            print_r($m);

            $c -> setPeso(55.30);
            $c -> setIdade(5);
            $c -> setMembros (4);
            $c -> locomover();
            $c -> alimentar();
            $c -> emitirSom();
            $c -> setCorPelo("Caramelo");
            $c -> usarBolsa();

            print_r($c);

            $k -> setPeso(9.58);
            $k -> setIdade(5);
            $k -> setMembros (4);
            $k -> locomover();
            $k -> alimentar();
            $k -> emitirSom();
            $k -> setCorPelo("Preto");
            $k -> abanarRabo();
            $k -> enterrarOsso();

            print_r($k);

        ?>
    </pre>
    </body>
</html>