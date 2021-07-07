<?php

class Sexo {

    public $i;

    public function getSexo()
    {
        
        if (isset($_POST['sexo'])) {
            
         for($this->i = 0; $this->i < count($_POST['sexo']); $this->i++){
            
            echo "Seu sexo é: " . $_POST['sexo'][$this->i];
         }
    
        } else {

            echo "Nenhuma campo foi selecionado";
        }
        
        
    }
}

$print = new Sexo();

echo $print->getSexo();




?>