<?php
require_once  'Conta.php';

$primeiraConta = new Conta();

$primeiraConta->sacar(300);
$primeiraConta->defineNome('Darlan');
$primeiraConta->defineCpf('123.456.789-10');
echo $primeiraConta->recuperarSaldo();
echo $primeiraConta->recuperarCpf();
echo $primeiraConta->recuperarNome();

