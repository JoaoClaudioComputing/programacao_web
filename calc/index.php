<?php
    require_once('model/calculadora.php');

    $calculadora = new \calc\model\calculadora();

    $calculadora->setValor1(10);
    $calculadora->setValor2(50);
    echo $calculadora->soma($calculadora->getValor1(), $calculadora->getValor2())."<br>";
    echo $calculadora->multi(10, 50)."<br>";
    echo $calculadora->div(10, 50)."<br>";
    echo $calculadora->sub(10, 50)."<br>";





?>