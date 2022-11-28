<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Portela', 'Centro', '13 de Maio', '1235');
$vinicius = new Titular(new Cpf('15648515123213'), 'Darlan', $endereco);
$primeiraConta = new Conta($vinicius);
var_dump($primeiraConta);