

<?php 

require_once 'Pessoa.php';

    class Aluno extends Pessoa {

        private $matr;
        private $curso;

        public function cancelarMatr() {
            echo "<p>Matrícula cancelada!</p>";
            
        }

        public function getMatr (){
            return $this-> matr;
        }
        public function setMatr($matr){
            $this-> matr = $matr;
        }

        public function getCurso(){
            return $this-> curso;
        }
        public function setCurso($curso){
            $this-> curso = $curso;
        }


    }

?>