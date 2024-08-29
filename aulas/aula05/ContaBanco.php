<?php 
    class ContaBanco {
        
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;


        //Métodos
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC"){
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->setSaldo(150);
            }

        }

        public function fecharConta(){
            if ($this->getSaldo()> 0){
                echo "<p>A conta ainda tem dinheiro, não é possível fecha-lá</p>";
            } else if ($this->getSaldo()<0){
                echo "<p>A conta está em débito, não é possível fecha-lá</p>";
            } else {
                $this->setStatus(false);
            }
        }

        public function depositar($v){
            if ($this->getStatus()){
              $this-> setSaldo($this-> getSaldo() + $v);   
            }
         else {
            echo "<p>Conta fechada. Não é possível depositar!</p>";
        }
        }

        public function sacar($v){
            if ($this->getStatus()) {
            if ($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p></p>";
            }
            }
        }

        public function pagarMensal(){

        }

        //Métodos Especiais
        public function __construct()
        {
            
        }


        public function getNumConta(){
            return $this-> numConta;
        }
        public function setNumConta($nC){
            $this-> numConta = $nC;
        }

        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($t){
            $this-> tipo = $t;
        }

        public function  getDono (){
            return $this-> dono;
        }
        public function setDono($d){
            $this-> dono = $d;
        }

        public function getSaldo(){
            return $this-> saldo;
        }
        public function setSaldo($sd){
            $this-> saldo = $sd;
        }

        public function getStatus(){
            return $this->status;
        }
        public function setStatus($st){
            $this-> status = $st;
        }
    }
    
?>