<?php

class Usuario {

	public $nome = "John Kevin";
	protected $idade = 24;
	private $senha = "1234";

	public function verDados(){
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

class Progamador extends Usuario {

	public function verDados(){

		echo get_class($this) . "<br>";
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

$endereco = new Progamador();

$endereco->verDados();


?>