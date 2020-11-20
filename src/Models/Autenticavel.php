<?php

namespace Alura\Banco\Models;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}
