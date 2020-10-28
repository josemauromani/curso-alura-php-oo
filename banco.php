<?php 

require 'src/Conta.php';
require 'src/Titular.php';
require 'src/Cpf.php';

$mauro = new Titular(new Cpf('286.018.808-86'), 'José Mauro');
$conta1 = new Conta($mauro);

$conta1->depositar(150);
echo $conta1->retornarSaldo(). PHP_EOL;
echo $conta1->retornarTitularCpf() . PHP_EOL;
echo $conta1->retornarTitularNome() . PHP_EOL;

echo "########################################" . PHP_EOL;

$erika = new Titular(new Cpf('261.214.668-71'), 'Érika');
$conta2 = new Conta($erika);
echo $conta2->retornarSaldo(). PHP_EOL;
echo $conta2->retornarTitularCpf() . PHP_EOL;
echo $conta2->retornarTitularNome() . PHP_EOL;

$totalDeContasAbertas = Conta::recuperarTotalDeContas();
echo "Total de contas abertas no banco: ${totalDeContasAbertas}" . PHP_EOL;
