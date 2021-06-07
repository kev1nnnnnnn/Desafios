<?php

$conn = new PDO("mysql:dbname=cadastro;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM alunos ORDER BY nome");

$stmt->execute();

$results = $stmt->fetchAll();

foreach ($results as $row) {

	foreach ($row as $key => $value) {
		echo "<strong>".$key.":<strong/>" .$value."<br/>";
	}	

	echo "*************************************<br/>";
}


?>
