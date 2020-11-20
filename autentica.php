<?php

use Alura\Banco\Services\Autenticador;
use Alura\Banco\Models\Cpf;
use Alura\Banco\Models\Funcionario\Diretor;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
    'Joao Mani',
    new Cpf('286.018.808-80'),
    10000
);

$autenticador->tentaLogin($diretor, '1234');