<?php

namespace Alura\DesignPatterns\Impostos;

use Alura\DesignPatterns\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento) : float;
}