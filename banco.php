<?php
require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

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