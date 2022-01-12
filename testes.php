<?php

use Alura\DesignPatterns\CalculadoraDeImpostos;
use Alura\DesignPatterns\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();

$orcamento->valor = 100;
echo $calculadora->calcula($orcamento , 'ISS');
 