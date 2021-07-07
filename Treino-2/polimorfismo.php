<?php

abstract class Pessoa {

	public function nome() {

		return "John Kevin";
	}
	public function emprego() {

		return "Desenvolvedor WEB";
	}
}

class Empresa extends Pessoa {

	public function nome() {

		return "Hugo Jorge";
	} 
	public function emprego(){

		return "Infraestrutura";
	}
}

class Cargo extends Pessoa {

	public function funcao() {

		return "Gerente e trabalho na " . parent::emprego();
	} 
}

$mostrar = new Empresa();

echo $mostrar->nome() . "<br>";
echo $mostrar->emprego();


echo "<br>";

$anunciar = new Cargo();

echo $anunciar->funcao();




?>