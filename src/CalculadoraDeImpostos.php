<?php 

namespace Alura\DesignPatterns;

use Alura\DesignPatterns\Impostos\Imposto;

class CalculadoraDeImpostos
{


    public function calcula(Orcamento $orcamento , Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}