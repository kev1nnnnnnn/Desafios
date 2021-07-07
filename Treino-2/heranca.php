<?php

class Documento {

	private $numero;

	public function getNumero() {
		return $this->numero;
	}
	public function setNumero($numero){
		$this->numero = $numero;
	}
}

class CPF extends Documento {

	public function validar():bool {

		$numero = $this->getNumero();
		return true;
	}
}

$doc = new CPF;
$doc->setNumero("0212222222");

echo $doc->getNumero();


?>
