<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;
use Alura\DesignPattern\Relatorio\ArquivoXmlExportado;
use Alura\DesignPattern\Relatorio\ArquivoZipExportado;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;
use Alura\DesignPattern\Relatorio\PedidoExportado;

require 'vendor/autoload.php';

$pedido = new Pedido();
$pedido->nomeCliente = 'Moquidesia';
$pedido->dataFinalizacao = new \DateTimeImmutable();

$pedidoExportado = new PedidoExportado($pedido);
$pedidoExportadoZip = new ArquivoZipExportado('pedido.array');

echo $pedidoExportadoZip->salvar($pedidoExportado);
