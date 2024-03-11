    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>conversor de moedas com api</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <h1>Resultado</h1>
            <?php
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $dados = json_decode(file_get_contents($url), true);
                $cotação = $dados["value"][0]["cotacaoCompra"];
                $real = $_REQUEST["din"] ?? 0;
                $dolar = $real / $cotação;
                /*echo "<p>Seus " . number_format($real, 2, ",", ".") . " equivalem a " . number_format($dolar, 2, ",", ".") . "</p>"*/
                $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão,$dolar, "USD") . "</strong></p>";
            ?>
        </main>
    </body>
    </html>
  
