<?php
class Carros {

	public $carros;

	public function getCarros()
	{
		return $this->carros = array(
			"Gol"=>"Wolksvagem",
			"Fiat"=>"Uno"
		);
	}
	public function setCarros($carros)
	{
		$this->carros = $carros;
	}
	
}

$onibus = new Carros();
 
 var_dump($onibus->getCarros());




?>