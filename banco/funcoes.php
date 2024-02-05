<?php

function sacar(array $conta, float $valorASacar):array 
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem(mensagem:"Você não pode sacar");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar):array 
{
    if($valorADepositar > 0){
        $conta ['saldo'] += $valorADepositar; 
    }else{
        exibeMensagem(mensagem:"O valor do depósito precisa ser positivo");
    }
    return $conta;
}

function exibeMensagem (string $mensagem)
{//subrotina
    echo $mensagem . '<br>';
}

function titularLetrasMaiusculas (array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta (array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular saldo: $saldo</li>";
}