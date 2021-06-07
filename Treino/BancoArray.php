<?php


class Bancoarray {

    protected $banco;

    public function __construct()
    {   
        
        $this->dados = array(
        'saldo'=>$_POST['saldo'],
        'saque'=>$_POST['saque'];

        );
    }
}






>?