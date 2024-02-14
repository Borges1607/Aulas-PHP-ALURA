<?php 
//verificar se uma string está dentro de outra

/*
$nome = 'Vinicius Dias';

$eDaMinhaFamilia = str_contains($nome, 'Dias');

if ($eDaMinhaFamilia){
    echo "$nome é da minha família" . PHP_EOL;
} else{
    echo "$nome não é da minha família" . PHP_EOL;
}
*/


//verificação inicio e fim
/*
$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')){
    echo 'É uma URL segura';
}else {
    echo 'Não é uma URL segura';
}
echo PHP_EOL;

if (str_ends_with($url, '.br')){
    echo 'É um domínio do Brasil';
} else{
    echo 'Não é um domínio do Brasil';
}
*/


//pegar uma string de dentro de outra //substring
//dividindo strings
//string pode ser acesada como um array ex: $senha[0]
/*
$nome = 'Vinícius Dias';
$email = 'Vinícius@alura.com.br';
$senha = 'éargr';

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8) {//retorna numero de bites e não de caracters, se colocar mb_ , conta corretamente
    echo 'Senha insegura' . PHP_EOL;
} 

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL; //retorna outra string com letra maiuscula
//echo mb_strtolower($usuario) . PHP_EOL; //retorna outra string com letra minusculas
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);//separar a string, transforma em um array

echo 'Nome: ' . $nome . PHP_EOL ;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL ;
*/


//unindo strings
/*
$telefones = ['(24) 9999 - 9999', '(21) 8888 - 8888', '(51) 2222 - 2222'];

echo implode(PHP_EOL, $telefones) . PHP_EOL; // unir

//manipular limite função explode

$array = '1 2 3 4';

var_dump(explode(' ', $array, 2));
*/


// removendo espaços
/*
$email = ' Vinícius@alura.com.br ';

echo trim($email) . PHP_EOL; //por padrão remove, espaço, tab, quebra de linha, caracter nulo | mas pode escolher outros

$csv = ',.Vinicius Dias,24,.';
echo trim($csv, '.,') . PHP_EOL; //remove todos
echo ltrim($csv, '.,') . PHP_EOL; //lado esquerdo
echo rtrim($csv, '.,') . PHP_EOL; //lado direito
*/


//strings numéricos
/*
$anoNascimento = '2005  ';

$idade = 2024 -$anoNascimento;

echo $idade . PHP_EOL;
*/


//identação
//heredoc = "" |  $conteudoEmail = <<<FIM
//nowdoc = ''  |  $conteudoEmail = <<<'FIM'
/*
function geraEmail(string $nome): void
{
    $conteudoEmail = <<<FIM
    Olá, $nome!

    Estamos entrando em contato para 
    {motivo do contato}

    {assinatura}

    FIM;

    echo $conteudoEmail;
}

geraEmail('Vinicius Dias');
*/


//htmlentities | caso seu dado venha de um banco não confiável e tenha um código no meio ele evita que o código funcione


//substituições
/*
$texto = 'Texto com qualquer coisa poxa e caramba';
echo str_replace(
    ['poxa', 'caramba'],
    '***', 
    $texto
) . PHP_EOL; //o que, pelo que, onde

echo strtr($texto, 'poxa', '***'). PHP_EOL;//essa função funciona com caractéres e não com strings
echo strtr($texto, ['poxa' => '***' , 'caramba' => '***']);//dessa maneira funciona
*/


//expressões regulares

$telefones = ['(24) 9999 - 9999', '(21) 8888 - 8888', '(51) 2222 - 2222'];

foreach ($telefones as $telefone){
    $regex = '/^(\([0-9]{2}\)) (9?[0-9]{4} - [0-9]{4})$/';
    $telefoneValido = preg_match(
        $regex, 
        $telefone,
        $correspondencia //verifica e armazena o que encontrou
    );
    var_dump($correspondencia);
    if ($telefoneValido){
        echo 'Telefone válido' . PHP_EOL;
    }else{
        echo 'Telefone inválido' . PHP_EOL;
    }

    //substituição com regex

    echo preg_replace(
        $regex, 
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}

