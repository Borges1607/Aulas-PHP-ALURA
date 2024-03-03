<?php 

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Service\Autenticador;

require_once 'autoloader.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'João Neto',
    new CPF('143.265.867-19'),
    10000
);

$umGerente = new Gerente(
    'Cleber Silva',
    new CPF('456.211.807-93'),
    3000
);

$umTitular = new Titular(
    new CPF('123.456.789-10'),
    'Jonas',
    new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B')
);

$autenticador->tentaLogin($umDiretor, '1234');
echo PHP_EOL;
$autenticador->tentaLogin($umGerente, '4321');
echo PHP_EOL;
$autenticador->tentaLogin($umTitular, 'abcd');