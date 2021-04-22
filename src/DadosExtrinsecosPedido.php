<?php

namespace Alura\DesignPattern;

class DadosExtrinsecosPedido
{
    /** @var string */
    private $nomeCliente;
    /** @var \DateTimeInterface */
    private $dataFinalizacao;

    public function __construct($nomeCliente, $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    public function nomeCliente()
    {
        return $this->nomeCliente;
    }

    public function dataFinalizacao()
    {
        return $this->dataFinalizacao;
    }
}
