<?php 

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Funcionario, EditorVideo, Desenvolvedor, Gerente, Diretor};
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoloader.php';

$umDesenvolvedor = new Desenvolvedor(
    'Felipe Borges',
    new CPF('123.456.789-10'),

    1000
);

$umDesenvolvedor->sobeDeNivel();

$umaEditoraVideo = new EditorVideo(
    'Fernanda',
    new CPF('165.279.136-61'),
    1500
);

$umaGerente = new Gerente(
    'Laiane',
    new CPF('478.436.711-17'),
    3000
);

$umDiretor = new Diretor(
    'Cleber',
    new CPF('171.839.013-27'),
    5000
);

$contralador = new ControladorDeBonificacoes();
$contralador->adicionaBonificacaoDe($umDesenvolvedor);
$contralador->adicionaBonificacaoDe($umaEditoraVideo);
$contralador->adicionaBonificacaoDe($umaGerente);
$contralador->adicionaBonificacaoDe($umDiretor);

echo $contralador->recuperaTotal();