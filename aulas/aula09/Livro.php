<?php 
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;
    
        public function detalhes(){
            echo "Livro " . $this-> titulo . " escrito por " . $this->autor;
            echo "<br> Páginas: ". $this->totPaginas . " página atual " . $this->pagAtual;
            echo "<br> Sendo lido por " . $this-> leitor-> getNome();
        }

        function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $leitor;
    
            
        }

  

        function getTitulo(){
            return $this-> titulo;
        }
        function setTitulo($titulo){
            $this-> titulo = $titulo;
        }

        function getAutor(){
            return $this-> autor;
        }
        function setAutor($autor){
            $this-> autor = $autor;
        }

        function getTotPaginas(){
            return $this-> totPaginas;
        }
        function setTotPaginas($totPaginas){
            $this-> totPaginas = $totPaginas;
        }

        function getPagAtual(){
            return $this-> pagAtual;
        }
        function setPagAtual($pagAtual){
            $this-> pagAtual = $pagAtual;
        }

        function getAberto(){
            return $this-> aberto;
        }
        function setAberto($aberto){
            $this-> aberto = $aberto;
        }

        function getLeitor(){
            return $this-> leitor;
        }
        function setLeitor($leitor){
            $this-> leitor = $leitor;
           
        }

        public function abrir(){
            $this-> aberto = true;
        }
        public function fechar(){
            $this-> aberto = false;
        }
        public function folhear($p){
            if ( $p>$this->totPaginas){
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            }
        }
        public function avancarPag(){
            if ($this->getAberto() && $this->pagAtual<$this->totPaginas){
            $this-> pagAtual ++;
            } else {
                echo "<p>Não é possível avançar para próxima página</p>";
            }
        }
        public function voltarPag(){
          
            if ($this->getAberto() && $this->pagAtual>0){
                $this-> pagAtual --;
                } else {
                    echo "<p>Não é possível retornar a página anterior</p>";
                }
        }

    }

    
?>