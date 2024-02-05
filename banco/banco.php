<?php
//require = include obrigatório
//requere_once = verifica se aquele require ja não foi chamado antes
include 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 400
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
$contasCorrentes ['234.567.891-01'] = sacar($contasCorrentes ['234.567.891-01'], 500);
$contasCorrentes ['123.456.789-10'] = sacar($contasCorrentes ['123.456.789-10'], 200);
$contasCorrentes ['345.678.910-12'] = depositar($contasCorrentes ['345.678.910-12'], 900);

unset ($contasCorrentes['123.456.789-10']); //remove item

titularLetrasMaiusculas($contasCorrentes['345.678.910-12']);

// echo "<ul>";
// foreach ($contasCorrentes as $cpf => $conta){
//     exibeConta($conta);
// }
// echo "</ul>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt><h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3></dt>
        <dd>Saldo:<?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>