<?php 

use Alura\Banco\Modelo\{Funcionario, CPF};
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoloader.php';

$umFuncionario = new Funcionario(
    'Felipe Borges',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umaFuncionaria = new Funcionario(
    'Laiane',
    new CPF('478.436.711-17'),
    'Gerente',
    3000
);

$contralador = new ControladorDeBonificacoes();
$contralador->adicionaBonificacaoDe($umFuncionario);
$contralador->adicionaBonificacaoDe($umaFuncionaria);

echo $contralador->recuperaTotal();