<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco Aula 11 Herança</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Pessoa.php';
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';

        // $p = new Pessoa();

        $al = new Aluno();
        $al -> setNome("Julio");
        $al -> setSexo("M");
        $al -> setIdade(18);
        $al -> setMatricula (21160);
        $al -> setCurso ("DS");
        $al -> pagarMensalidade();
        
        print_r($al);
        
        $bs = new Bolsista();
        $bs -> setNome("Horty");
        $bs -> setSexo("F");
        $bs -> setIdade(41);
        $bs -> setMatricula (11579);
        $bs -> setCurso ("ADM");
        $bs -> pagarMensalidade();
        $bs -> renovarBolsa();
        $bs -> setBolsa(12.5);


        print_r($bs);

        ?>
    </pre>
    </body>
</html>