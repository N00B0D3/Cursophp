<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manipulação de strings php</title>
</head>
<body>
    <?php 
    /*$nome = "Gustavo"; 
    $sobrenome = "Guanabara";

    echo "$nome $sobrenome \u{1F596}";

    $nome = 'Ruan';
    $sobrenome = 'Patrick \u{1F596}'; //aspas simples não le caracteres especiais como emojis
    echo "$nome $sobrenome";*/

    const ESTADO = "RJ";
    //echo "moro no ESTADO"; -----> moro no ESTADO
    //echo 'Moro no ESTADO'; -----> moro no ESTADO
    echo "moro no". ESTADO;

    const CANAL = "curso em video \u{1F499}";
    echo "eu adoro o ". CANAL;

    $nom = "rodrigo";
    $snom = "nogueira";
    echo "$nom \"minotauro\" $snom"; // \ é usada para escapar caracteres especiais dentro de strings, permitindo que eles sejam interpretados literalmente.
    ?>
</body>
</html>