<?php

namespace Alura\Banco\Services;

use Alura\Banco\Models\Funcionario\Diretor;
use Alura\Banco\Models\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): bool
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Usuario logado";
            return true;
        }

        echo "Não autorizado";
        return false;
    }
}
