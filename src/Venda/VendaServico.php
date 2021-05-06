<?php

namespace Alura\DesignPattern\Venda;

class VendaServico extends Venda
{
    public string $nomePrestador;

    public function __construct(\DateTimeInterface $dataRealizacao, string $nomePrestador)
    {
        parent::__construct($dataRealizacao);
        $this->nomePrestador = $nomePrestador;
    }
}
