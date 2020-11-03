<?php

namespace Alura\Banco\Models\Conta;

use Alura\Banco\Models\Conta\Titular;

class Conta
{
    private $titular;
    private $saldo = 0;
    private static $totalContas = 0;
    private static $codigoBanco = 77;
    
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        self::$totalContas++;
    }

    public function __destruct()
    {
        self::$totalContas--;
    }

    public function sacar(float $valor): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;
    }

    public function depositar($valor): void
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            return;
        }
        echo "Operação não permitida - Valor deve ser positivo!";
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function retornarSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperarTotalDeContas(): int
    {
        return self::$totalContas;
    }

    public function retornaCpfTitular(): string
    {
        return $this->titular->retornaCpf();
    }

}
