<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // // 0x = hexadecimal 0b = binário 0 = octal
        // $numero = 0x1A;
        // echo "ovalor da variável é $numero";

        // $v = 300;

        // var_dump($v);

        // $num = "950";
        // var_dump($num);

        // $casado = false;
        // print "O valor para casado é $casado";

        // $vet = [6, 2, 9, 3, 5];
        // var_dump($vet);

        // class Pessoa{
        //     private string $nome;
        // }

        // $p = new Pessoa;
        // var_dump($p);

        // echo "PHP \u{1F418}"
        // $nome = "Gustavo";
        // $sobrenome = "Guanabara";
        //     echo "$nome $sobrenome \u{1f596}"

    // const CANAL = "Curso em Vídeo \u{1f499}";

    // echo "Eu adoro o " . CANAL;
    // echo "Estamos no ano de " . date('Y');

    // $nome = "Rodrigo";
    // $snome = "Nogueira";

    // echo "$nome "Minotauro" $snome";

    // $nome = "Eduardo";
    // $sobrenome = "Linhares";
    // $apelido = "Gafanhoto";
    // echo "$nome \n \t\"$apelido\"\t\n $sobrenome";

    $canal = "Curso em Vídeo";
    $ano = date('Y');
    echo <<< TESTE
         Olá galera do $canal!
         Tudo bem com vocês?
         Como está sendo esse ano de $ano?
         Abraços! \u{1f596}   
    TESTE;



    ?>
</body>
</html>