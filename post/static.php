<?php

class Category {

	public $rock;
	public $reggae;
	public $rap;

	public static function getRock()
	{
		return $rock = array(
			"Link Park"=>"1",
			"Limp Bizkt"=>"2",
			"Ramones"=>"3",
			"Pink Floyd"=>"4",
			"Pink"=>"5"
		);
	}
	public static function setRock($rock)
	{
		$this->rock = $rock;
	}
}

$categoria = new Category();
var_dump(json_encode($categoria::getRock()));


?>