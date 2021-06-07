<?php

class Imc{

    public $mc;
    public $altura;
    public $peso;

    public function getImc(){

        $this->altura = (float)$_POST['altura'];
        echo "Sua altura atual é: " . $this->altura . "<br>";

        $this->peso =  (float)$_POST['peso'];
        echo "Seu peso atual é: " . $this->peso . "<br>";

        $this->mc = $this->peso / $this->altura;
        return  $this->mc;
    }
}

$print = new Imc();

echo "O seu IMC é: " . $print->getImc();

?>