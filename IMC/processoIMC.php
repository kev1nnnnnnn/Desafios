<?php

$altura = $_POST['altura'];
$peso = $_POST['peso'];

$imc = $peso / $altura ** 2;

echo "Seu IMC é de: $imc: ". PHP_EOL;

if ($imc < 16) {
	echo "Magreza grave!!! Você precisa comer".PHP_EOL;
} elseif ($imc <= 25) {
	echo "Você está saudável!".PHP_EOL;
} else {
	echo "Você está com sobre peso ou obeso. Cuidado!".PHP_EOL;
}

?>