<?php
require_once  'Conta.php';
require_once  'Titular.php';
require_once  'Cpf.php';

$primeiraConta = new Conta(new Titular(new cpf('123456789111'), 'darlan'));

echo PHP_EOL.$primeiraConta->recuperarSaldo().PHP_EOL;
echo $primeiraConta->recuperaNome(). PHP_EOL;
echo $primeiraConta->recuperaCpf(). PHP_EOL;

echo Conta::recuperaNumContas();