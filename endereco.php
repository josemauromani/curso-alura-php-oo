<?php

use Alura\Banco\Models\Endereco;

require_once 'autoload.php';

$endereco1 = new Endereco('Bauru', 'Jardim Redentor', 'Rua Sao Bartholomeu', '124');
$endereco2 = new Endereco('Bauru', 'Vila Getulio', 'Rua Bartholomeu de Gusmao', '2-55');

echo $endereco1 . PHP_EOL;
echo $endereco2 . PHP_EOL;
