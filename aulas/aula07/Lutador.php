<?php 

    class Lutador {

        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
         {
 
             $this->nome = $no;
             $this->nacionalidade = $na;
             $this->idade = $id;
             $this->altura = $al;
             $this->setPeso($pe);
             $this->vitorias = $vi;
             $this->derrotas = $de;
             $this->empates = $em;
 
         }

         //Métodos
         private function getNome(){
            return $this-> nome;
        }
        private function setNome($no){
            $this-> nome = $no;
        }

        private function getNacionalidade(){
            return $this-> nacionalidade;
        }
        private function setNacionalidade($na){
            $this-> nacionalidade = $na;
        }

        private function getIdade(){
            return $this-> idade;
        }
        private function setIdade($id){
            $this-> idade = $id;
        }

        private function getAltura(){
            return $this-> altura;
        }
        private function setAltura($al){
            $this-> altura = $al;
        }

        private function getPeso(){
            return $this-> peso;
        }
        private function setPeso($pe){
            $this-> peso = $pe;
            $this->setCategoria 
        }

        private function getCategoria(){
            return $this-> categoria;
        }
        private function setCategoria($ca, $pe){
            if($pe<52.2){
               $this-> categoria = "invalido";
            } else if ($pe<=70.3) {
                $this->categoria = "Leve";
            } else if ($pe<=83.9){
                $this-> categoria = "Médio";
            } else if ($pe <= 120.2){
                $this-> categoria = "Pesado";
            } else {
                $this-> categoria = "Inválido";
            }
            $this-> categoria = $ca;
        }

        private function getVitorias(){
            return $this-> vitorias;
        }
        private function setVitorias($vi){
            $this-> vitorias = $vi;
        }

        private function getDerrotas(){
            return $this-> derrotas;
        }
        private function setDerrotas($de){
            $this-> derrotas = $de;
        }

        private function getEmpates(){
            return $this-> empates;
        }
        private function setEmpates($em){
            $this-> empates = $em;
        }



        public function apresentar(){
            echo "Lutador: " . getNome();
            echo "Origem: " . getNacionalidade();
            echo  getIdade() ." anos";
            echo  getAltura() ." m de altura";
            echo "Pesando: " . getPeso(). "Kg";
            echo "Ganhou: " . getVitorias();
            echo "Perdeu: " . getDerrotas();
            echo "Empatou: " . getEmpates();
        }

        public function status(){

        }

        public function ganharLuta(){
            $this-> setVitorias(getVitorias() + 1);
        }

        public function perderLuta(){
            $this-> setDerrotas(getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this-> setEmpates(getEmpates() + 1);
        }


       
    }

?>