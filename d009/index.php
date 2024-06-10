<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? '';
        $peso1 = $_GET['p1'] ?? '';
        $valor2 = $_GET['v2'] ?? '';
        $peso2 = $_GET['p2'] ?? '';        
    ?>
    <main>
        <h1>Médias Aritimétias</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?php echo $valor1?>" required>
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" min="1" value="<?php echo $peso1?>" required>
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?php echo $valor2?>"required>
            <label for="p1">2° Peso</label>
            <input type="number" name="p2" id="p2" min="1" value="<?php echo $peso2?>" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <?php 
            $ma = ($valor1 + $valor2)/2;
            $mp = ($valor1 * $peso1 + $valor2 * $peso2)/($peso1 + $peso2);
        ?>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?php echo $valor1?> e <?php echo $valor2?>:</p>
        <ul>
            <li>A <strong>Média aritmética simples</strong> entre os valores é igual a <?php echo number_format($ma, 2, ",", ".")?></li>
            <li>A <strong>Média aritmética ponderada</strong> com pesos <?php echo $peso1?> e <?php echo $peso2 ?> é igual a <?php echo number_format($mp, 2, ",", ".")?></li>
        </ul>
    </section>
</body>
</html>