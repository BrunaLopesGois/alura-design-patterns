<?php

namespace Alura\DesignPattern;

class CacheOrcamentoProxy extends Orcamento
{
    private float $valorCache;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->valorCache = 0;
        $this->orcamento = $orcamento;
    }

    public function adicionaItem(Orcavel $item)
    {
        throw new \DomainException('Não é possível adicionar item a orçamento cacheado');
    }
    
    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}
