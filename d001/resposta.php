<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
                $numero = $_REQUEST["numero"] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "O número escolhido foi $numero";
                echo "<p> O seu antecessor é $antecessor</p>";
                echo "<p> O seu sucessor é $sucessor<p>";

            ?>
        </p>
        <!-- <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button> -->

        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
    
</body>
</html>