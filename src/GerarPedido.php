<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;

class GerarPedido
{
    private float $valorOrcamento;
    private int $numeroDeItens;
    private string $nomeCliente;
    
    public function __construct(float $valorOrcamento, int $numeroDeItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroDeItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function valorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    public function numeroDeItens(): int
    {
        return $this->numeroDeItens;
    }

    public function nomeCliente(): string
    {
        return $this->nomeCliente;
    }
}
