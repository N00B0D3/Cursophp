<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="d1">dividendo</label>
        <input type="number" name="d1" id="d1" value="<?=$dividendo?>">
        <label for="d2">divisor</label>
        <input type="number" name="d2" id="d2" value="<?=$divisor?>">
        <input type="submit" value="dividir">
    </form>
    </main>

    <section>
        <h2>estrutura da divisão</h2>
        <?php 
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;

            echo "<ul>";
            echo "<li>Dividendo: $dividendo</li>";
            echo "<li>Divisor: $divisor</li>";
            echo "<li>Quociente: $quociente</li>";
            echo "<li>Resto: $resto</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>