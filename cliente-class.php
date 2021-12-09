<?php
    class cliente{
            private $nome;
            private $saldo;
        
        public function setNome($nom){
            $this->nome=$nom;
        }
        public function setSaldo($sal){
            $this->saldo=$sal;
        }
        public function getNom(){
            return $this->nome;
        }
        public function getSaldo(){
           return $this->saldo;
        }
        public function recebimento(){
            if($this->saldo == ""){
                $this->confimarrecebimento();
            }else{
                $this->pagarconta($this->saldo);
            }
        }
        public function confimarrecebimento(){
            echo "<br>o rebimento nao foi confirmado";
        }
        public function pagarconta($valor){
            echo "<br>Foi pago o valor de R$ ".$valor;
        }
    }
?>