<?php

namespace Alura\DesignPatterns\Impostos;

use Alura\DesignPatterns\Orcamento;
class Icms implements Imposto{


    public function calculaImposto(Orcamento $orcamento) : float
    {
        return $orcamento->valor * 0.1;

    }
}