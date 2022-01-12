<?php

namespace Alura\DesignPatterns;

use Alura\DesignPatterns\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPatterns\Descontos\DescontoMaisDe5Itens;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento) : float
    {

        $desconto5Itens = new DescontoMaisDe5Itens();
        $desconto = $desconto5Itens->calculaDesconto($orcamento);
        if($desconto == 0)
        {
            $descontoMaisDe500Reais = new DescontoMaisDe500Reais();
            $desconto = $descontoMaisDe500Reais->calculaDesconto($orcamento);
        }

        return $desconto;

        return 0;
    }
}