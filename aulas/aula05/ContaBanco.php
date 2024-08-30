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
                echo "<p>Conta de ". $this->getDono(). " fechada com sucesso!</p>"; 
            }
        }

        public function depositar($v){
            if ($this->getStatus()){
              $this-> setSaldo($this-> getSaldo() + $v); 
              echo "<p>Deposito de R$ $v realizado na conta de ". $this->getDono(). "</p>";  
            }
         else {
            echo "<p>Conta fechada. Não é possível depositar!</p>";
        }
        }

        public function sacar($v){
            if ($this->getStatus()) {
            if ($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v autorizado na conta de ". $this->getDono(). "</p>";
            } else {
                echo "<p>Saldo insuficiente para saque!</p>";
            } } else {
                echo "<p>Não posso sacar de uma conta fechada.</p>";
            }
        }

        public function pagarMensal(){
            if ($this->getTipo()=="CC"){
                $v = 12;
            } else if ($this->getTipo()=="CP"){
                $v = 20;
            }
            if ($this->getStatus()){
                $this->setSaldo($this->getSaldo()- $v);
                echo "<p>Pagamento mensal de R$ $v realizado na conta de ". $this->getDono(). "</p>";
            } else {
                echo "<p>Problemas com a conta. Não é possível realizar o pagamento.</p>";
            }

        }

        //Métodos Especiais
        public function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
            
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