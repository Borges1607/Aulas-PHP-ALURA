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
//isset //verifica se a chave existe e nula(null) pode ser para uma variavel normal
//array_search //procura a chave com um determinado valor
/*
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
*/
//diferença == para ===
// 10 == pode ser 10 ou '10'
// 10 === só pode ser igual a 10  //comparam a tipagem, não só o conteudo




//diferenças de arrays

// array_diff(array1, array2) //retorna um novo array connteno os elementos que existam no primeiro array mais não existem no segundo (chaves ignoradas)
//array_diff_key // mesma coisa mas os valores são ignorados
//array_diff_assoc //leva em concideração os dois casos
/*
$notasBimestre1 = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

$notasBimestre2 = [
    'Ana' => 9,
    'João' => 8,
    'Roberto' => 7,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2) ;
//var_dump(array_keys($alunosFaltantes)); //ver alunos faltantes 
//var_dump(array_values($alunosFaltantes)); //ver notas do primeiro trimestre alunos faltantes

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos)); //conbinar arrays
var_dump(array_flip($alunosFaltantes)); // inverte o que é valor vira chave e chave vira valor
*/


//Juntar arrays
/*
$alunos2021 = [
    0 => 'Ana',
    1 =>'João',
    2 =>'Maria',
    3 =>'Roberto',
    4 =>'Vinicius'
];

$NovosAlunos = [
    5 =>'Patricia',
    6 =>'Nico',
    7 =>'Kilderson',
    8 =>'Daiane',
];

//$alunos2022 = array_merge($alunos2021, $NovosAlunos); // valores numéricos não são sobreescritos, já as chaves são
//$alunos2022 = $alunos2021 + $NovosAlunos; // com indices iguais os que vieram depois são ignorados
$alunos2022 = [...$alunos2021,'Felipe Borges', ...$NovosAlunos];//desenpacotando array, igual array_merge mas pode adicionar itens no meio
array_push($alunos2022, 'alice', 'Bob', 'Charlie');//adicionar elemento no final da array
$alunos2022[] = 'Luiz'; //adicionar um elemento no final da array
array_unshift($alunos2022, 'Stephane', 'Rafaela');//adiciona elementos no inicio da array

echo array_shift($alunos2022) . PHP_EOL; //remove e retorna primeiro elemento da array
echo array_pop($alunos2022) . PHP_EOL;// remove e retorna último elemento da array

var_dump($alunos2022);
*/

//tuplas = pequeno conjunto de elementos que a sua posição pode significar algo
/*
$dados = ['Vinicius', 10, 24];

list($nome, $nota, $idade) = $dados; // ou [$nome, $nota, $idade] = $dados;     //cria novas variaveis
*/
$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];

//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;
extract( $dados); //pega array, verifica as chaves e todas elas vão virar uma variavel
var_dump($nome, $nota, $idade);

var_dump(compact('nome','nota', 'idade')); //pega varias variáveis e transforma em um array