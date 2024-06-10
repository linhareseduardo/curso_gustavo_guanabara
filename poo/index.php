<?php 

declare (strict_types = 1);

    function calcula_imc(float $peso,float $altura): float{
        var_dump($altura);
        var_dump($peso);

        return $peso / ($altura * $altura);
    }

    var_dump(calcula_imc(100,1.73));
?>