<?php
require_once  'Conta.php';

$primeiraConta = new Conta('Darlan', '123.456.789-10');

echo PHP_EOL.$primeiraConta->recuperarSaldo().PHP_EOL;
echo $primeiraConta->recuperarCpf().PHP_EOL;
echo $primeiraConta->recuperarNome().PHP_EOL;

