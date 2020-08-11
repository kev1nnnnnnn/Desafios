<?php

class Padaria{

	private $bolo;
	private $paes;
	private $suco;
	private $tapioca;

	public function getBolo():string {

		return $this->bolo;
	}
	public function setBolo($bolo) {

		$this->bolo = $bolo;
	}
//*************************************
	public function getPaes():string {
		return $this->paes;
	}
	public function setPaes($paes) {
		$this->paes = $paes;
	}
//*************************************
	public function getSuco():string {
		return $this->suco;
	}
	public function setSuco($suco) {
		$this->suco = $suco;
	}
	//*************************************
	public function getTapioca():string {
		return $this->tapioca;
	}
	public function setTapioca($tapioca) {
		$this->tapioca = $tapioca;
	}

	//inicio da função exibe
	public function exibe() {

		return array(
			"bolo"=>$this->getBolo(),
			"paes"=>$this->getPaes(),
			"suco"=>$this->getSuco(),
			"tapioca"=>$this->getTapioca()
		);
	} // fim da função exibe
	
	
}

$compra = new Padaria();
$compra->setBolo("Chocolote");
$compra->setPaes("Francês");
$compra->setSuco("Maracuja");
$compra->setTapioca("Pequena");

var_dump($compra->exibe());

?>