<?php

namespace Alura\Banco\Models\Funcionario;

use Alura\Banco\Models\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonus(): float
    {
        return $this->retornarSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '123123';
    }

}
