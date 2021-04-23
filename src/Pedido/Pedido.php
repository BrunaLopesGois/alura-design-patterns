<?php

namespace Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Orcamento;

class Pedido
{
    /** @var TemplatePedido */
    public $template;
    /** @var Orcamento */
    public $orcamento;
}
