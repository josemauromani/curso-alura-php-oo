<?php

namespace Alura\Banco\Models;

use Alura\Banco\Models\Pessoa;

class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
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
}
