<?php

namespace Alura\Banco\Models\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeNivel()
    {
        $this->recebeAumento($this->retornarSalario() * 0.75);
    }

    public function calculaBonus(): float
    {
        return 500.0;
    }
}
