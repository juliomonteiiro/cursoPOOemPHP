<?php 

    class Pessoa {

        private $nome;
        private $idade;
        private $sexo;


        public function __construct($no, $id, $se)
         {
 
             $this->nome = $no;
             $this->idade = $id;
             $this->sexo = $se;
 
         }

         //Métodos
        function getNome(){
            return $this-> nome;
        }
        function setNome($nome){
            $this-> nome = $nome;
        }

        function getIdade(){
            return $this-> idade;
        }
        function setIdade($idade){
            $this-> idade = $idade;
        }

        function getSexo(){
            return $this-> sexo;
        }
        function setSexo($sexo){
            $this-> sexo = $sexo;
        }


        public function fazerAviver(){
            $this-> setIdade($this->getIdade() + 1);
        }

       
    }

?>