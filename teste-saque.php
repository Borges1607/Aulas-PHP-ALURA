<?php

use Alura\Banco\Modelo\{CPF, Endereco};
use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};

require_once 'autoloader.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Felipe Borges',
        new Endereco('Rolante', 'Centro', 'AV. Bento Gonçalves', '45')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
echo PHP_EOL;


$conta2 = new ContaCorrente(
    new Titular(
        new CPF('123.966.789-17'),
        'Roberto Carlos',
        new Endereco('São Paulo', 'Centro', 'R. porto', '113')
    )
);

$conta2->deposita(500);
$conta2->saca(100);

echo $conta2->recuperaSaldo();