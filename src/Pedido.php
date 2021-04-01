<?php

namespace Alura\DesignPattern;

use DateTimeInterface;

class Pedido
{
    /** @var string */
    public $nomeCliente;
    /** @var DateTimeInterface */
    public $dataFinalizacao;
    /** @var Orcamento */
    public $orcamento;
}
