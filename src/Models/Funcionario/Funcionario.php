<?php

namespace Alura\Banco\Models\Funcionario;

use Alura\Banco\Models\Pessoa;
use Alura\Banco\Models\Cpf;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome)
    {
        parent::validaNome($nome);
        $this->nome = $nome;
    }

    public function retornarSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "valor deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

    abstract public function calculaBonus(): float;
}
