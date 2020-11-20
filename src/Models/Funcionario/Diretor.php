<?php

namespace Alura\Banco\Models\Funcionario;

use Alura\Banco\Models\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonus(): float
    {
        return $this->retornarSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}
