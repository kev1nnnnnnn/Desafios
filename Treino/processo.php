<?php
	
Class Treino {

    public $n1;
    public $n2;
    public $media;
  

    public function getMedia(){

       $this->n1 = $_POST['n1'];
       $this->n2 = $_POST['n2'];

       if (!$_POST['n1'] || $_POST['n2'] = "") {

       echo "Insira os dados";
       exit;

       } else {

        $this->media = ($this->n1 + $this->n2) / 2;
        
       }

       return $this->media;
    }

   
}

$print = new Treino();

echo "A sua média é: " . $print->getMedia();


?>