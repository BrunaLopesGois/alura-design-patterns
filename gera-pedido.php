<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$dadosDePedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedido = new GerarPedidoHandler();
$gerarPedido->execute($dadosDePedido);
