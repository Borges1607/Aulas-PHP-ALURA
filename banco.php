<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$jonas = new Titular(new CPF('123.456.789-10'),'Jonas');
$primeiraConta = new Conta($jonas);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

$patricia = new Titular(new CPF('456.123.789-10'),'Patricia');
$segundaConta = new Conta($patricia);

echo $segundaConta->recuperaSaldo() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaNomeTitular() . PHP_EOL;

$terceiraConta = new Conta(new Titular(new CPF('678.123.789-10'),'jonh'));
echo Conta::recuperaNumeroDeContas();