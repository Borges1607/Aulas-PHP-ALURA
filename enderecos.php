<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoloader.php';

$umEndereco = new Endereco('Petrópolis', 'São Jorge', 'minha rua', '71B');
$outroEndereco = new Endereco('Rio', 'Porto', 'minha rua', '60');

echo $umEndereco  -> bairro;
echo PHP_EOL;
echo $umEndereco . PHP_EOL;
echo $outroEndereco;