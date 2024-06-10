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
    <h1>Conversor de Moedas 2.0</h1>    
    <?php 
    //Cotação vinda da API do Banco Central
    $início = date("m-d-Y", strtotime("-7 days")); 
    $fim = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $início.'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    $dados = json_decode(file_get_contents($url),true);

    //var_dump($dados);

    $cotação = $dados["value"][0]["cotacaoCompra"];

    //Quanto $$ você tem ? 
    $real = $_GET["din"] ?? 0;

    //Equivalente em dólar
    $dolar = $real / $cotação;

    //Mostrar o resultado
    //echo "Seus R\$" . number_format(real, 2, ",", ".") . "equivalem a US\$" . number_format($dolar, 2, ",", ".");

    //Formatação de moedas internacionalização!
    //Biblioteca intl (Internalization PHP)

    $padrão = numfmt_create("pt_BR", NumberFormatter:: CURRENCY);
    
    echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar,"USD") . "</p>";
?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
