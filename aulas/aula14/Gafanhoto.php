<?php 

    require_once 'Pessoa.php';
        class Gafanhoto extends Pessoa {

            private $login;
            private $totAssistido;

            function  __construct($nome, $idade, $sexo, $login){
                parent :: __construct($nome, $idade, $sexo);
                $this-> login = $login;
                
            }

            function assistirMaisUm(){
                $this-> totAssistido ++;
            }

            function getLogin(){
                return $this-> login;
            }
            function setLogin($login){
                $this-> login = $login;
            }

            function getTotAssistido(){
                return $this-> totAssistido;
            }
            function setTotAssistido($totAssistido){
                $this-> totAssistido = $totAssistido;
            }

        }
?>