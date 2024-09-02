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
        function getNome(){
            return $this-> nome;
        }
        function setNome($nome){
            $this-> nome = $nome;
        }

        function getNacionalidade(){
            return $this-> nacionalidade;
        }
        function setNacionalidade($nacionalidade){
            $this-> nacionalidade = $nacionalidade;
        }

        function getIdade(){
            return $this-> idade;
        }
        function setIdade($idade){
            $this-> idade = $idade;
        }

        function getAltura(){
            return $this-> altura;
        }
        function setAltura($altura){
            $this-> altura = $altura;
        }

        function getPeso(){
            return $this-> peso;
        }
        function setPeso($peso){
            $this-> peso = $peso;
            $this->setCategoria();
        }

        function getCategoria(){
            return $this-> categoria;
        }
         function setCategoria(){
            if($this-> peso <52.2){
               $this-> categoria = "invalido";
            } else if ($this-> peso <=70.3) {
                $this->categoria = "Leve";
            } else if ($this-> peso <=83.9){
                $this-> categoria = "Médio";
            } else if ($this-> peso <= 120.2){
                $this-> categoria = "Pesado";
            } else {
                $this-> categoria = "Inválido";
            }
        }

        function getVitorias(){
            return $this-> vitorias;
        }
        function setVitorias($vitorias){
            $this-> vitorias = $vitorias;
        }

        function getDerrotas(){
            return $this-> derrotas;
        }
        function setDerrotas($derrotas){
            $this-> derrotas = $derrotas;
        }

        function getEmpates(){
            return $this-> empates;
        }
        function setEmpates($empates){
            $this-> empates = $empates;
        }



        public function apresentar(){
            echo "<p>-----------------------------</p>";
            echo "<p>CHEGOU A HORA! O lutador: " . $this-> getNome();
            echo " Veio diretamente de " . $this-> getNacionalidade();
            echo " Tem " . $this->  getIdade() . " anos e com " . $this->  getAltura() ." m de altura";
            echo " Pesando: " . $this-> getPeso(). "Kg";
            echo "<BR> Ele tem: " . $this-> getVitorias() . " vitórias ";
            echo $this-> getDerrotas() . " derrotas e " . $this-> getEmpates() . " empates</p>";
        }

        public function status(){
            echo "<p>-----------------------------</p>";
            echo "<p>" . $this-> getNome() . " é um peso " . $this->getCategoria();
            echo " e já ganhou " . $this-> getVitorias() . " vezes,";
            echo " perdeu " . $this-> getDerrotas() . " vezes e"; 
            echo " empatou " . $this-> getEmpates() . " vezes!</p>";
        }

        public function ganharLuta(){
            $this-> setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this-> setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this-> setEmpates($this->getEmpates() + 1);
        }


       
    }

?>