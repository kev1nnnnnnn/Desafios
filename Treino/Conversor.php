<?php


class Conversor {

    public $metros;
    public $cm;
    public $total_1;
    public $total_2;

    public function getMetros(){

        $this->metros = $_POST['metros'];

        echo "Valor incial em metros: " . $this->metros . "<br>";
        

        $this->total_1 = $this->metros * 100;

        return $this->total_1;
    }

    public function getCm(){

        $this->cm = $_POST['cm'];

        $this->total_2 = $this->cm / 100;

        echo "Valor incial em CM: " . $this->cm . "<br>";

        return $this->total_2;
    }
}

$print = new Conversor();

echo "O valor em CENTÍMETROS é: " . $print->getMetros() . "<br>";
echo "===================================== <br>";
echo "O valor em METROS é: " . $print->getCm();







?>