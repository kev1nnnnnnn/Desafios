<?php

class NBA {

	protected $team;
	public $public;

	public function __construct(){

		$this->team = array(
			'Time1'=>'Lakers',
			'Time2'=>'Chicago Bulls',
			'Time3'=>'Golde State'
		);

		$this->public = array(
			'pagantes'=>40000,
			'cortesia'=>2000,
		);
	}
	public function imprimir1() {

		foreach($this->team as $key => $values) {
	
			echo $key . ' - ' . $values . '<br>';
		}
		echo '=========================== <br>';
	}

	public function imprimir2()
	{
		foreach($this->public as $key => $values) {

			echo $key . ' - ' . $values . '<br>';
		}
	}

}

$print = new NBA();
echo $print->imprimir1();
echo $print->imprimir2();


?>