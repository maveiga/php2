<?php

require_once 'Conta.php';
require_once 'Endereco.php';
require_once 'Titular.php';
require_once 'CPF.php';
require_once 'Pessoa.php';
require_once 'Funcionario.php';



$endereco = new Endereco('prudente','um bairro','rua um','123');
$endereco2 = new Endereco('prudente','um bairros','rua dois','213123');
$vinocius = new titular(new CPF('123.456.789-10'), 'Vinicius Dias',$endereco);
$primeiraConta = new Conta($vinocius);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia',$endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

//$outra = new Conta(new Titular('123', 'Abcdefg'));
echo Conta::recuperaNumeroDeContas();

$funcionario=new Funcionario('vinic',new CPF('698.549.548-15'),'dev');
var_dump ($funcionario);