<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso POO PHP</title>
</head>
<body>
    <?php 
        class Caneta {
            public $modelo;
            public $cor;
            private $ponta;
            protected $carga;
            protected $tampada;

            public function rabiscar(){

            if ($this->tampada == true) {

                echo "<p>ERRO! Não posso rabiscar!</p>";

            } else {

                echo "<p>Estou rabiscando...</p>";
            }

            }

            public function tampar(){

                $this->tampada = true;

            }

            public function destampar(){
                
                $this->tampada = false;

            }
        }
    ?>
</body>
</html>