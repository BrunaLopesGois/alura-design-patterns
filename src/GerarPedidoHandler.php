<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;

class GerarPedidoHandler implements Command
{
    public function __construct(/* PedidoRepository $repository, MailService $mail */)
    {
        //
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->numeroDeItens();
        $orcamento->valor = $gerarPedido->valorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->nomeCliente();
        $pedido->orcamento = $orcamento;

        // PedidoRepository
        echo "Cria pedido no banco de dados" . PHP_EOL;

        // MailService
        echo "Envia e-mail para cliente" . PHP_EOL;
        
        echo "Gerar log da criação de pedido" . PHP_EOL;
    }
}
