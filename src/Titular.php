<?php

class Titular
{
    private $cpf;
    private $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->validarNomeTitular($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function retornarCpf(): string
    {
        return $this->cpf->retornarCpfNumero();
    }

    public function retornarNome(): string
    {
        return $this->nome;
    }

    private function validarNomeTitular($nome): void
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
