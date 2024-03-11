<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>explicacôes</title>
</head>
<body>
    <?php 
    $min = 0;
    $max = 100;
    $num = mt_rand($min,$max);
    //rand() =1951 linear congrential generator
    //mt_rand() =1997 mersenne twister não funciona caso o $mimn seja maior que $max
    //A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
    //random_int() gera n´´umeros aleatorios criptograficamente seguros
    echo "Gerando um número aleatório entre $min e $max... \n";
    echo "O número gerado foi $num";
    ?>
</body>
</html>