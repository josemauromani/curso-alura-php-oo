<?php

namespace Alura\Banco\Models\Conta;

use Alura\Banco\Models\Autenticavel;
use Alura\Banco\Models\Cpf;
use Alura\Banco\Models\Endereco;
use Alura\Banco\Models\Pessoa;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function retornaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
    
}
