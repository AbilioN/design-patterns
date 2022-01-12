<?php

use Alura\DesignPatterns\CalculadoraDeDescontos;
use Alura\DesignPatterns\CalculadoraDeImpostos;
use Alura\DesignPatterns\Impostos\Icms;
use Alura\DesignPatterns\Impostos\Iss;
use Alura\DesignPatterns\Orcamento;

require 'vendor/autoload.php';


// Utilizando strategy pattern transformando icms e iss em classes distintas
// $calculadora = new CalculadoraDeImpostos();

// $orcamento = new Orcamento();
// $icms = new Icms();
// $iss = new Iss();
// $orcamento->valor = 100;
// echo $calculadora->calcula($orcamento , $iss);
 


$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 6;
echo $calculadora->calculaDescontos($orcamento);