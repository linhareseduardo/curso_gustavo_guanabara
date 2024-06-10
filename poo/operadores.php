<?php 
    $valor = 100;
    //$valor = $valor + 5;
    $teste = ++ $valor;
    $teste2 = $valor ++;
    echo var_dump($valor . " valor");
    echo var_dump($teste . " teste");
    echo var_dump($teste2 . " teste2");

    $valor1 = 102;

    if($valor1 > 100){
        var_dump($valor);
    }

    $salario = 100;
    $cargo = 'gerente';

    if($salario > 800 and $cargo =='gerente'){
        echo 'maior';
    }else{
        echo 'menor';
    }
?>