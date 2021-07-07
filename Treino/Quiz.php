<?php

class Quiz {

	public $questao1;
	public $questao2;

	public function melhorGenero() {

		$questao1 = $_POST['questao1'];
		$questao2 = $_POST['questao2'];

		$resposta1 = 'a';
		$resposta2 = 'b';
		$resposta3 = 'c';

		if ($questao1 == $resposta2) {
			echo "<h4>Qual o melhor estilo musical?</h4> <br>";
			echo": " ."Resposta correta: " . $questao1. "<br>";
		} else 
			echo "<h4>Qual o melhor estilo musical?</h4> <br>";
			echo "Você errou! A resposta certa é a letra: " . $resposta2 . "<br>";
		}


		if ($questao2 == $resposta1) {
			echo "<h4>Qual o melhor esporte do mundo?</h4> <br>";
			echo": " ."Resposta correta: " . $resposta1. "<br>";
		} else {
			echo "Você errou! A resposta certa é a letra: " . $resposta1 . "<br>";
		}

		return $this->questao1;	
		return $this->questao2;
	}
}

$valor = new Quiz();
echo $valor->melhorGenero();
?>
