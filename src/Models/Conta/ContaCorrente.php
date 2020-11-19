<?php 
namespace Alura\Banco\Models\Conta;

class ContaCorrente extends Conta {

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    protected function percentualTarifa(): float
    {
        return 0.05;
    }
}