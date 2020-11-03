<?php

namespace Alura\Banco\Models;

class Endereco
{
    private $cidade;
    private $bairro;
    private $logradouro;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $logradouro, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
    }

    public function retornaCidade(): string
    {
        return $this->cidade;
    }

    public function retornaBairro(): string
    {
        return $this->bairro;
    }

    public function retornaLogradouro(): string
    {
        return $this->logradouro;
    }

    public function retornaNumero(): string
    {
        return $this->numero;
    }
}
