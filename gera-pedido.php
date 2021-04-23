<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$dadosDePedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedido = new GerarPedidoHandler();
$gerarPedido->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco(new Pedido()));
$gerarPedido->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail(new Pedido()));
$gerarPedido->adicionarAcaoAoGerarPedido(new LogGerarPedido(new Pedido()));
$gerarPedido->execute($dadosDePedido);
