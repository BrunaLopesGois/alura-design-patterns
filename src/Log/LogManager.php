<?php

namespace Alura\DesignPattern\Log;

abstract class LogManager
{
    public function log(string $severidade, string $mensagem)
    {
        /** @var LogWritter $logWritter */
        $logWritter = $this->criarLogWritter();

        $dataHoje = date('d/m/Y');
        $dataFormatada = "[$dataHoje][$severidade]: $mensagem";
        $logWritter->escreve($dataFormatada);
    }

    abstract public function criarLogWritter(): LogWritter;
}
