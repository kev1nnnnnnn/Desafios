<?php

    require_once 'classes/Calculadora.php';

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operacao = $_POST['operacao'];

    $calc = new Calculadora();

    //setar os valores
    $calc->setN1($n1);
    $calc->setN2($n2);

    switch ($operacao) {
        case 'somar':
            $calc->somar();
            break;
        
        case 'subtrair':
            $calc->subtrair();
            break;

        case 'multiplicar':
            $calc->multiplicar();
            break;

        case 'dividir':
            $calc->dividir();
            break;
    }

    echo $calc->getTotal();


?>