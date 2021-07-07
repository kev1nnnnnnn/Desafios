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

	public function __toString() {
		return $this->logradouro . "," . $this->numero. "-" .$this->cidade;

	}
}

$newEndereco = new Endereco("Rua 9 casa", "45", "Manaus AM");
echo $newEndereco;

?>