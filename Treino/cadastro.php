<?php

function cadastrar()
{	
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

	for ($i = 0; $i < count($nome); $i++) { 
		
		echo "$nome[$i] $senha[$i]";
	}

	if ($_POST['nome'] || $_POST['senha'] =! "") {
		echo "Cadastratado com sucesso";
	} else {
		echo "Não foi possivel cadastrar";
	}
}

cadastrar();




?>