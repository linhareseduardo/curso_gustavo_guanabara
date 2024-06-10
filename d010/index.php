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
        $atual = date("Y");
        $nasc = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $atual; 
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?php echo $atual-1 ?>" value="<?php echo $nasc?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?php echo $atual ?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?php echo $ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <?php 
            $idade = $ano - $nasc;
        ?>

        <h2>Resultado</h2>
        <p>Quem nasceu em <?php echo $nasc ?> vai ter <strong><?php echo $idade?> anos</strong> 
em <?php echo $ano?>!</p>
    </section>
    
</body>
</html>