<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function saca(float $valorASacar):void
    {
        if($valorASacar > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;  
    }

    public function deposita(float $valorADepositar):void
    {
        if($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }
          
        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino):void
    {
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
            
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }
    
    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }
}


//teste
/*
$primeiraConta = new Conta(); //objeto
$primeiraConta->saldo = 200;
$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Vinicius Dias';
//var_dump($primeiraConta); 
$segundaConta = new Conta();
$segundaConta->cpfTitular = '987.654.321-10';
$segundaConta->nomeTitular = 'Patricia';
$segundaConta->saldo = 1500;
var_dump($primeiraConta); 
var_dump($segundaConta); 
$primeiraConta ->sacar(150);
var_dump($primeiraConta);
$segundaConta ->depositar(300);
var_dump($segundaConta);
$terceiraConta = new Conta();
$terceiraConta->cpfTitular = '456.789.123-10';
$terceiraConta->nomeTitular = 'João';
var_dump($terceiraConta);
$segundaConta->transferir(500, $terceiraConta);
var_dump($segundaConta);
var_dump($terceiraConta);
*/