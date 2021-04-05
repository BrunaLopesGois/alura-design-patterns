<?php

use Alura\DesignPattern\Http\ReactPhpHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistroOrcamento;

require 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new ReactPhpHttpAdapter());
$orcamento = new Orcamento();
$orcamento->aprova();
$orcamento->finaliza();
$registroOrcamento->registrar($orcamento);
