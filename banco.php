<?php
require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300);
$primeiraConta->defineCpfTitular('123.456.789-10');
$primeiraConta->defineNomeTitular('Jonas');

echo $primeiraConta->recuperaSaldo();
echo PHP_EOL;
echo $primeiraConta->recuperaCpfTitular();
echo PHP_EOL;
echo $primeiraConta->recuperaNomeTitular();