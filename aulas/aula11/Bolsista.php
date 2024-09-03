<?php 

    require_once 'Aluno.php';

    class Bolsista extends Aluno {
        
        private $bolsa;

        

        public function renovarBolsa(){
            print "<p>A bolsa do aluno " . $this-> getNome() . " foi renovada!</p>";
        }

        public function pagarMensalidade(){
            print "<p>" .$this->getNome() ." é bolsista! Então paga a mensalidade com desconto!</p>";
        }

        public function getBolsa(){
            return $this-> bolsa;
        }
        public function setBolsa($bolsa){
            $this-> bolsa = $bolsa;
        }
    }


?>