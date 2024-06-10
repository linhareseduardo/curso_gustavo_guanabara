<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <?php            
         
            $aleatorio = mt_rand(0,100);

            echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
            echo "<p>O valor gerado foi $aleatorio</p>";
            

        ?>
         <button onclick="javascript:window.location.reload();">&#x2b05; Gerar outro</button>
    </main>
</body>
</html>