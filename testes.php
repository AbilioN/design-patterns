<?php

use Alura\DesignPatterns\CalculadoraDeImpostos;
use Alura\DesignPatterns\Impostos\Icms;
use Alura\DesignPatterns\Impostos\Iss;
use Alura\DesignPatterns\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$icms = new Icms();
$iss = new Iss();
$orcamento->valor = 100;
echo $calculadora->calcula($orcamento , $iss);
 