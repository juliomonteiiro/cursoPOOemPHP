<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco Aula 10</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Pessoa.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';
        require_once 'Aluno.php';

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1 -> setNome("Julio");
        $p2 -> setNome("Enzo");
        $p3 -> setNome("Kemily");
        $p4 -> setNome("Horty");

        $p1 -> setSexo("M");
        $p2 -> setSexo("M");
        $p3 -> setSexo("F");
        $p4 -> setSexo("F");

        $p1 -> setIdade(18);
        $p2 -> setIdade(9);
        $p3 -> setIdade(19);
        $p4 -> setIdade(42);

        $p2 -> setCurso("Informática");
        $p3 -> setSalario(2500.74);
        $p4 -> setSetor("Estoque");

        $p2 -> setMatr(21160);
        $p3 -> setEspecialidade("Programação Web");

        $p2 -> cancelarMatr();
        $p3 -> ReceberAum(500.25);
        $p4 -> mudarTrabalho();

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);


        
        ?>
    </pre>
    </body>
</html>