<?php
namespace Alura\Banco\Models\Conta;

use Alura\Banco\Models\Conta\Conta;

class ContaPoupanca extends Conta {
    protected function percentualTarifa(): float
    {
        return 0.10;
    }
}