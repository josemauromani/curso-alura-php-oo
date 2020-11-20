<?php

use Alura\Banco\Models\Cpf;
use Alura\Banco\Models\Funcionario\{Gerente, Diretor, Desenvolvedor, Editor};
use Alura\Banco\Services\ControladorBonus;

require_once 'autoload.php';

$func1 = new Gerente(
    'José Mauro',
    new Cpf('286.018.808-86'),
    3000
);

$func2 = new Diretor(
    'Erika',
    new Cpf('286.018.808-00'),
    5000
);

$func3 = new Desenvolvedor(
    'Zé Colmeia',
    new Cpf('286.018.808-86'),
    1000
);

$editor = new Editor(
    'Junior',
    new Cpf('286.018.808-86'),
    2000
);

$controlador = new ControladorBonus();

$controlador->adicionarBonus($func1);
$controlador->adicionarBonus($func2);

$func3->sobeNivel();
$controlador->adicionarBonus($func3);

$controlador->adicionarBonus($editor);

echo $controlador->recuperarTotalBonus() . PHP_EOL;
