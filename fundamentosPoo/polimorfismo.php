<?php 

require_once 'Conta.php';
require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

$contas = [];
$contas[] = new ContaCorrente(1234, 'CC.1234', 100, 500);
$contas [] = new ContaPoupanca(1235, 'PP.4566', 100);

foreach($contas as $conta){
    if($conta instanceof Conta){
        print $conta -> getInfo() . '<br>';
        print "--Saldo atual: {$conta -> getSaldo()} <br>";
        
        $conta -> depositar(200);
        print "--Depósito de 200 <br>";
        print "--Saldo atual: {$conta -> getSaldo()} <br>";

        if ($conta -> retirar (700)){
            print "--Retirada de 700 (ok) <br>";
        }
        else{
            print "--Retirada de 700 não permitida<br>";
        }
        print "--Saldo atual: {$conta -> getSaldo()} <br>";
    }
}



?>