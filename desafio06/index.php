<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //capturando os dados do formulario retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get"> <!-- short tag php para echo -->
            <label for="v1">valor1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">valor2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="somar">
        </form>
    </main>

    <section id="resultado">
        <h2>resultado da soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            print "<p>A soma entre os valores $valor1 e $valor2 é <strong>$soma</strong></p>";
        ?>
    </section>
</body>
</html>