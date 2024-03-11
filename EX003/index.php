<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variaveis e constantes</title>
</head>
<body>
    <?php 
        $nome = "Ruan";
        $sobrenome = "Patrick";
        const PAIS = "Brasil";

        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
        //REGRAS PARA NOMES IDENTIFICADORES:
        //variaveis sempre começam com $
        //o segundo (caractere) pode ser letra ou o simbolo _
        //aceita caracteres [a-z],[A-Z],[0-9] e [_]
        //aceita caracteres da tabela ASCII a partir de 128
        //aceita caracteres acentuados como á,õ,ç
        //a linguagem e case sensitive em relação aos nomes
        //nomes especiais como $this não podem ser usados
        //$nome = "Rafael";
        //$sobrenome = "Silva";

    ?>
</body>
</html>