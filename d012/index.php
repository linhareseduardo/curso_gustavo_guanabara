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
        $total = $_REQUEST['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" value="<?php echo $total ?>" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    
    <?php 
        $sobra = $total;
        // Total de Semanas
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        
        // Total de Dias
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;

        // Total de Horas
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        
        //Total de Minutos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;

        //Total de Segundos
        $segundo = $sobra;
    ?>
    
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?php echo $total?> segundos</strong> eqivalem a um total de: </p>
        <ul>
            <li><?php echo $semana?> semana(s)</li>
            <li><?php echo $dia?> dia(s)</li>
            <li><?php echo $hora?> hora(s)</li>
            <li><?php echo $minuto?> minuto(s)</li>
            <li><?php echo $segundo?> segundo(s)</li>
        </ul>
    </section>
    
</body>
</html>