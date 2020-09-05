<?php
/*
function calc($n1, $n2, $n3, $n4) {


	$media = ($n1 + $n2 + $n3 + $n4) / 4;

	if ($media >=1 && $media <=5) {
		
		echo "Você tirou: $media, está reprovado!!";
	}
	elseif ($media >=6 && $media <=7) {
		
		echo "Você tirou: $media, Você passou!!";
	} elseif ($media >=8 && $media <=10) {

		echo "Você tirou: $media, PARABÉNS!! Maior nota";
	}
}
calc(9,4,4,3); */


/*function tre(){

	$a = array('one', 'two');
	$b = array('three', 'four', 'five');

	print_r(array_unique(array_merge($a, $b)));
	
}
tre(); */
/*
function ping(){

	$host = "www.google.com";

	echo "ping -n 3 {$host}";
}
ping();*/

function inc(){

	echo "*===ALFABETO===*" . PHP_EOL . "<br>";

	$s = 'a';

	for ($n=0; $n<24; $n++) { 
		echo ++$s . PHP_EOL ."<br>";
	}
	
}
inc();
?>