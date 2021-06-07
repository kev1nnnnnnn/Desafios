<?php

    Class Banco {

        public $saldo;
        public $saque;
        public $total;

        public function getSaldo(){

            $this->saldo = $_POST['saldo'];
            $this->saque = $_POST['saque'];

            echo "SALDO ANTERIOR: " . $this->saldo . '<br>';
            echo "SAQUE: " . $this->saque . '<br>';

            $this->total = $this->saldo - $this->saque;

            if ($this->saque > $this->saldo) {
                
                echo "SALDO NEGATIVO: " . "-".$this->saldo;
                exit;
            } 

            return $this->total;       
        }

        public function setSaldo($total){

            $this->total = $total;
        }

    }

    $print = new Banco();

    echo "SALDO ATUAL: " . $print->getSaldo();
   
?>




