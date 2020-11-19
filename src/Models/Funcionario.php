<?php

namespace Alura\Banco\Models;

use Alura\Banco\Models\Pessoa;

class Funcionario extends Pessoa
{
    private $cargo;
    private $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function retornaCargo(): string
    {
        return $this->cargo;
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

    public function calculaBonus(): float
    {
        return $this->salario * 0.1;
    }
}
