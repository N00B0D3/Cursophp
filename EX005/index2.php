<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sintaxe heredoc</title>
</head>
<body>
    <!-- O IDENTIFICADOR é uma sequência de caracteres que você escolhe para identificar o bloco de texto. Ele deve começar na primeira coluna da linha e não pode conter espaços.

    O bloco de texto começa com <<<IDENTIFICADOR e termina com IDENTIFICADOR; na própria linha, sem espaços à frente ou atrás.

    O conteúdo dentro do bloco heredoc é tratado como uma string normal, exceto pela interpolação de variáveis, que não ocorre.

    O heredoc é útil quando você precisa inserir grandes blocos de texto em seu código PHP, sem ter que lidar com a concatenação de várias linhas de strings ou a preocupação com caracteres de escape.-->
    <?php 
        $canal = "Curso em Video";
        $ano = date('Y');
        echo <<<teste
        Olá galera do $canal!
            Tudo bem com vocês?
        como está sendo esse ano de $ano?
        abraços! \u{1F596}
        teste;
    ?>
    <!--now doc está para aspas simples (não contem interpretação de strings) assim como heredoc está para aspas duplas(para usar now doc basta usar o identificador entre aspas simples ' )-->
</body>
</html>