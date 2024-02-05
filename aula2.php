<?php

//Lista-array(vetor)
/*
$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[2];

echo $umaIdade;
*/

//loop lista
/*
$idadeList = [21, 23, 19, 25, 30, 41, 18, 35];

list($idadeLucas, $idadePedro, $idadeAna) = $idadeList;

$idadeList[] = 20;

for($i =0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}
*/

//exemplo contas correntes
/*
$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'Augusto',
    'saldo' => 300
];
$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes) ; $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
*/

//foreach
/*
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '234.567.891-01' =>  [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '345.678.910-12' => [
        'titular' => 'Augusto',
        'saldo' => 300
    ]
];
$contasCorrentes['547.638.928-72'] = [
    'titular' => 'Cleber',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
*/

//tipos chaves
/*
$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}
*/

/*
function adiciona2($x){
    return $x + 2;
}
$resultado = adiciona2(x:10);
echo $resultado;

exit();
*/
