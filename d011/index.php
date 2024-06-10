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
        $preco = $_REQUEST['preco'] ?? '0';
        $reaj = $_REQUEST['reaj'] ?? '0';
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?php echo $preco ?>">

            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?php echo $reaj ?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        $aumento = $preco * $reaj / 100;
        $novo = $preco + $aumento;
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p> O Produto que custava R$<?php echo number_format($preco, 2, ",", ".") ?>, com <strong><?php echo $reaj ?> de aumento</strong> vai passar a custar <strong>R$<?php echo number_format($novo, 2, ",", ".") ?></strong> a partir de agora.</p>
    </section>

    <script>
        //Declarações automáticas  
        mudaValor()

        function mudaValor(){
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>