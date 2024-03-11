<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>expressôes aritmeticas em php</title>
</head>
<body>
    <!-- ORDEM DE PRECEDÊNCIA
        () não é operador mas recebe prioridade no calculo
        ** = potenciação
        * = multiplicação / = divisão % = resto de divisão
        + = soma - = subtraçao
    -->
    <?php 
        $res = 5 + 2 / 2;
        echo "O resultado é $res";

        $pres = 50 / 2 + 3 ** 2;
        echo "O resultado é $pres";
    ?>

</body>
</html>