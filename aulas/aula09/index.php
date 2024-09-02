<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco Aula 09</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $p[0]= new Pessoa("Julio", 18, "M");
        $p[1]= new Pessoa("Horty", 41, "F");

        $l[0]= new Livro("A Cabana", "William P. Young", 240, $p[1]);
        $l[1]= new Livro("Quem pensa enriquece", "Napolleon Hill", 304, $p[0]);
        
        $l[0] -> abrir();
        $l[0] -> folhear(500);
        $l[0] -> avancarPag();
        
        $l[0] -> detalhes();
        
        ?>
    </pre>
    </body>
</html>