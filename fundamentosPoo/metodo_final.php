<?php 

require_once 'Conta.php';
require_once 'ContaCorrente.php';

class ContaCorrenteEspecial extends ContaCorrente{
    public function retirar ($quantia){
        $this -> saldo -= $quantia;
    }
}

?>