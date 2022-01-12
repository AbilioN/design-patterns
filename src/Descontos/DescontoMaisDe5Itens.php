<?php

namespace Alura\DesignPatterns\Descontos;

use Alura\DesignPatterns\Orcamento;

class DescontoMaisDe5Itens

{

    public function calculaDesconto(Orcamento $orcamento) : float
    {
        if($orcamento->quantidadeItens > 5)
        {
            return $orcamento->valor * 0.1;
        }

        return 0;
    }
}