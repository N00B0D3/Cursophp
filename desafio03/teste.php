<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    //cotação em dolar
    $cotação = 4.92;

    //quanto R$ você tem?
    $real = 1000;
    
    //Equivalência em dólar
    $dolar = $real / $cotação;

    //echo "Seus R\$ " . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");

    //Formatação de moedas com internacionalização!
    //Biblioteca intl (internallization PHP)

    $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");
    ?>
</body>
</html>