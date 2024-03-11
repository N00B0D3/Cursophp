<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana", "segunda", time() +3600);

                session_start();
                $_SESSION["teste"] = "funcionou";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                echo "<h1>Superglobal request</h1>";
                var_dump($_REQUEST);

                echo "<h1>superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
                  /*Uma query string é uma parte de uma URL que contém dados que são passados para o servidor como parte de uma requisição HTTP. Esses dados são geralmente usados para enviar parâmetros ou informações adicionais para o servidor, como parte de uma solicitação GET. A query string começa após o caractere de interrogação "?" na URL e consiste em pares de chave/valor, separados por "&".
                ex: https://www.exemplo.com/pagina.php?nome=Joao&sobrenome=Silva*/
            ?>
        </pre>
    </main>
</body>
</html>