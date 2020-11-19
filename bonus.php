<?php

use Alura\Banco\Models\{ Funcionario, Cpf} ;
use Alura\Banco\Services\ControladorBonus;

require_once 'autoload.php';

$func1 = new Funcionario(
    'José Mauro',
    new Cpf('286.018.808-86'),
    'Dev',
    8500
);

$func2 = new Funcionario(
    'Erika',
    new Cpf('286.018.808-00'),
    'Gerente',
    12000
);

$controlador = new ControladorBonus();

$controlador->adicionarBonus($func1);
$controlador->adicionarBonus($func2);

echo $controlador->recuperarTotalBonus() . PHP_EOL;