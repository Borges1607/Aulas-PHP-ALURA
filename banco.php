<?php
require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10','Jonas');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;


$segundaConta = new Conta('456.123.789-10','Patricia');

echo $segundaConta->recuperaSaldo() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaNomeTitular() . PHP_EOL;


echo Conta::recuperaNumeroDeContas();