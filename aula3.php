<?php

//ordenar array
/*
$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'desordenadas:';
var_dump($notas);

echo 'ordenadas:';
var_dump($notasOrdenadas);
*/

// outra forma de ordenar
/*
$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];

    // =

    // if($nota1['nota'] > $nota2['nota']){
    //     return -1;
    // }

    // if($nota2['nota'] > $nota1['nota']){
    //     return 1;
    // }

    // return 0;
}

usort($notas, 'ordenaNotas');
var_dump($notas);
*/

//formas de ordenar array
/*
$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicios' => 6
];

//ordenando por nota decrescente
//arsort($notas);
//ordenando ordem alfabética
ksort($notas);
var_dump($notas);
*/

//is_array //verifica se é um array
//array_is_list //verifica se é um array numérico sequencial
//array_key_exists(chave que qero buscar, onde quero buscar) ou Key_exists //verifica se uma chave existe dentro de um array
//in_array mesma coisa que o array_key_exists porem ao enves de chaves buscamos valores 
//isset //verifica se a chave existe e nula(null)
//array_search //procura a chave com um determinado valor

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => null
];

if (is_array($notas)){
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

var_dump(array_key_exists('Vinicius', $notas));

echo 'Vinicius fez a prova:' . PHP_EOL;
var_dump(isset($notas['Vinicius']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));

echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas);

//diferença == para ===
// 10 == pode ser 10 ou '10'
// 10 === só pode ser igual a 10