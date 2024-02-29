<?php

require_once 'autoloader.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');

$jonas = new Titular(new CPF('123.456.789-10'),'Jonas', $endereco);
$primeiraConta = new Conta($jonas);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

// echo $primeiraConta->recuperaSaldo() . PHP_EOL;
// echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
// echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
var_dump($primeiraConta);

$patricia = new Titular(new CPF('456.123.789-10'),'Patricia', $endereco);
$segundaConta = new Conta($patricia);

// echo $segundaConta->recuperaSaldo() . PHP_EOL;
// echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
// echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', 'd');

$terceiraConta = new Conta(new Titular(new CPF('678.123.789-10'),'julho', $outroEndereco));
var_dump($terceiraConta);

echo Conta::recuperaNumeroDeContas();