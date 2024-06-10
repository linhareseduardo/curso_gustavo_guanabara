<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        //Área de declarações
        $numero = $_GET['num'] ?? 1;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?php echo $numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);

            echo "<p>Analisando o número <strong>$numero</strong>, temos:";
            echo "<ul><li> A sua raiz quadrada é ". number_format($rq, 2, ",", ".") ."</li>";
            echo "<li> A sua raiz cúbica é ". number_format($rc, 2, ",", ".") ."</li></ul>";
        ?>
    </section>
</body>
</html>