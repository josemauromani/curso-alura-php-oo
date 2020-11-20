<?php

namespace Alura\Banco\Models\Funcionario;

class Editor extends Funcionario
{
    public function calculaBonus(): float
    {
        return 300;
    }
}