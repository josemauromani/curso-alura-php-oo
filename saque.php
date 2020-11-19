<?php

use Alura\Banco\Models\Conta\ContaCorrente;
use Alura\Banco\Models\Conta\ContaPoupanca;
use Alura\Banco\Models\Conta\Titular;
use Alura\Banco\Models\Cpf;
use Alura\Banco\Models\Endereco;

require_once 'autoload.php';

$contac = new ContaCorrente(
    new Titular(
        new Cpf('286.018.808-86'),
        'José Mauro',
        new Endereco('Bauru', 'Jardim Redentor', 'Rua São Bartolomeu', '1-124')
    )
);


$contap = new ContaPoupanca(
    new Titular(
        new Cpf('286.018.808-86'),
        'José Mauro',
        new Endereco('Bauru', 'Jardim Redentor', 'Rua São Bartolomeu', '1-124')
    )
);

$contac->depositar(1000);
$contac->sacar(100);
echo $contac->retornarSaldo() . PHP_EOL;

$contap->depositar(100);
$contap->sacar(90);
echo $contap->retornarSaldo() . PHP_EOL;