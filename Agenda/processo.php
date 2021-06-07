<?php

class Agenda {

	public $a;

	public function getMsg()
	{
		return $this->a;
	}
	public function setMsg($a)
	{
		$a = $_POST['texto'];

		$this->a = $a;
	}
}

$send = new Agenda();

echo $send->getMsg();



?>