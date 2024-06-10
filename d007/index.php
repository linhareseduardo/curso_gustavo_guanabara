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
        $minimo = 1_412;
        $salario = $_GET['sal'] ?? $minimo;
    ?>
    <main>
        <h1>Informeseu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?php echo $salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?php echo number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            echo "<p>Quem recebe um salário de R\$". number_format($salario, 2, ",", ".")." ganha $tot salários mínimos + R\$ " . number_format($dif, 2, ",", "."). ".</p>";
        ?>
    </section>
</body>
</html>