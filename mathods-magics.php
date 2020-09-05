<?php

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a,$b,$c){

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}
}

$newEndereco = new Endereco("Rua 9 casa", "45", "Manaus AM");
var_dump($newEndereco);

?>