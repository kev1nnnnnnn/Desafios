<?php
    
   
    class Banco{

        public string$nome;
        public int $nascimento;
        public int $saldo;
        public string $agencia;


        public function __construct(string $nome, int $nascimento, int $saldo, string $agencia)
        {
            $this->nome = $nome;
            $this->nascimento = $nascimento;
            $this->saldo = $saldo;
            $this->agencia = $agencia;
        }

        public function getSaldo()
        {
            if ($this->saldo >= 100) {
                echo "Seu saldo é: ". $this->saldo ."<br>" . " Você pode sacar: ";
            } else {
                echo "Não pode sacar";
            }
        }
    }
  
    $print = new Banco("John Kevin", 06-07-1996, 100, "Bradesco" . "<br>");
    $print->getSaldo();

    foreach ($print as $key => $value) {
        echo $key." - ".$value . "<br>";
    }
?>


