<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalProduto;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require 'vendor/autoload.php';

$item1 = new ItemOrcamento();
$item2 = new ItemOrcamento();
$item3 = new ItemOrcamento();
$item1->valor = 500;
$item2->valor = 1500;
$item3->valor = 1000;
$builder = new ConstrutorNotaFiscalServico();
$builder->paraEmpresa('123456', 'Moquidesia Tech');
$builder->comItens($item1);
$builder->comItens($item2);
$builder->comItens($item3);
$builder->comObservacoes('Esta nota fiscal foi construída com um construtor');

$notaFiscal = $builder->constroi();

$notaFiscal2 = clone $notaFiscal;
$notaFiscal2->itens[] = new ItemOrcamento();

var_dump($notaFiscal2, $notaFiscal);
