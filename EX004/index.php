<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos em php</title>
</head>
<body>
    <h1>TESTE DE TIPOS PRIMITIVOS</h1>
    <?php 
    // 0x = hexadecimal, 0b = binario, 0 = octal
        /*$num = 0x1a;
        echo "O valor da variavel é $num";

        $v = "Gustavo";
        var_dump($v); //mostra todas as informações da variavel

        $n = (integer) 3e2; //3 x 10 (2)
        echo "O valor é $n";
        var_dump($n);

        $numero = "950";
        var_dump($numero);

        $vet = [6,2.5, "Maria", 3, false];
        var_dump($vet)*/

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>