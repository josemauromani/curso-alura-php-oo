<?php

require_once 'autoload.php';

use Alura\Banco\Models\Conta\Conta;
use Alura\Banco\Models\Cpf;
use Alura\Banco\Models\Endereco;
use Alura\Banco\Models\Pessoa;
use Alura\Banco\Models\Conta\Titular;

$sara = new Pessoa('Sara Ramos Mani', new CPF('111.111.111-11'));
echo $sara->retornaNome() . PHP_EOL;

$endereco1 = new Endereco('Bauru', 'Jardim Redentor', 'Rua São Bartholomeu', '1-124');

$mauro = new Titular(new Cpf('286.018.808-86'), 'José Mauro', $endereco1);
$conta1 = new Conta($mauro);
$conta1->depositar(150);
echo $conta1->retornarSaldo() . PHP_EOL;
echo $conta1->retornaCpfTitular() . PHP_EOL;

echo "########################################" . PHP_EOL;

$erika = new Titular(new Cpf('261.214.668-71'), 'Érika', $endereco1);
$conta2 = new Conta($erika);
echo $conta2->retornarSaldo() . PHP_EOL;

$totalDeContasAbertas = Conta::recuperarTotalDeContas();
echo "Total de contas abertas no banco: ${totalDeContasAbertas}" . PHP_EOL;

foreach(class_parents($mauro) as $value) {
    echo $value . PHP_EOL;
}
