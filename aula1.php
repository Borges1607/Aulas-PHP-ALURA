<?php

//Mensagem
//echo "Olá Mundo!";

//varavel e retorno de variavel
/*
$idade = 18;
echo $idade;
*/

//Operações
/*
$idade = 18;

$idadeDaqui10Anos = $idade + 10;
$idadeHa5Anos = $idade - 5;
$idadeMultiplicada = $idade * 2;
$idadeDividida = $idade / 2;
$potenciação = $idade ** 3;
$modulo = 10 % 3 ; //resto da divisão
echo $potenciação;
*/

//tipos de dados primitivos
/*
$idade = 18; //int ou integer
$salario = 1250.80; //double ou float
$texto = "bem vindo!"; //string
$verdade = true; //boolean

echo gettype($texto); //exibe tipo da variavel
*/

//manipulação de strings
/*
$idade = 18; 
//echo 'Olá mundo! Minha idade é de ' . $idade . ' anos'; 
echo "Olá mundo! \n";
// quebra de linha \n ou . PHP_EOL .
// \t = tab
echo "Eu tenho $idade anos";
*/

//condições if e else
/*
$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos ou a partir de 16 anos acompanhado\n";

if ($idade >= 18  ){//ou >=
    echo "Você tem $idade anos. Pode Entrar sozinho";
}elseif ($idade >=16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos e está acompanhado. Pode entrar";
} else{
    echo "Você tem $idade anos. Não pode entrar";
}

$idade = 15;
$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
echo $mensagem;
*/

//repetição while
/*
$contador = 1;
while ($contador <= 15){
    echo "#$contador\n";
    $contador = $contador + 1;
}
*/

//repetção for
/*
//break; //quebra loop
for($contador=1 ; $contador <= 15 ; $contador ++){// ou $contador += 1
    if ($contador == 13){//não exibir aluno de numero 13
        continue;//pular pra proxima execussão
    }
    echo "#$contador\n"; 
}
*/

//desafios 

    //Mostrar números impares de 1 a 100
    /*
    //minha solução 
    echo "Numeros ímpares até 100";
    for($contador=1 ; $contador <= 100 ; $contador += 2 ){
        echo "$contador\n"; 
    }
    
    //solução professor
    //$i = iteração
    for($i = 1; $i < 100 ; $i++){
        if($i % 2 != 0){
            echo $i . PHP_EOL;
        }
    }
    */

    //Tabuada
    //minha solução 
    /*
    $numeroTabuado = 9;
    echo "Tabuada do $numeroTabuado\n";
    for($i=1 ; $i <= 10 ; $i ++ ){
        echo $numeroTabuado * $i ."\n"; 
    }
    
    //solução professor
    $multiplicador = 3;
    for($i=1 ; $i <= 10 ; $i ++ ){
        echo "$multiplicador x $i = " . $multiplicador * $i . PHP_EOL;
    }
    */

    //IMC
    /*
    //minha solução 
    $peso = 70.30;
    $altura = 1.79;
    $resultado = $peso / ($altura ** 2);
    echo "Calcule seu IMC\n";
    echo "Seu IMC é de $resultado\n";
    if($resultado < 18.5){
        echo "Sua Classificação = Magreza";
    }elseif($resultado >=18.5 && $resultado <=25.9){
        echo "Sua Classificação = Normal";
    }elseif($resultado >=26 && $resultado <=29.9){
        echo "Sua Classificação = Sobrepeso";
    }elseif($resultado >=30 && $resultado <= 39.9){
        echo "Sua Classificação = Obesidade";
    }else{
        echo "Sua Classificação = Obesidade Grave";
    }

    //solução professor
    $peso = 60;
    $altura = 1.74;
    $imc = $peso / $altura ** 2;
    echo "Seu IMC é de $imc. Você está com o IMC ";
    if($imc < 18.5){
        echo "abaixo";
    }elseif ($imc < 25){
        echo "dentro";
    }else{
        echo "acima";
    }
    echo " do recomendado";
    */