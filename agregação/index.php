<?php 
class produtos {
    public $nome;
    public $valor;

function __construct($nome, $valor)
{
    $this->nome = $nome;
    $this->valor = $valor;
}
}

class carrinho{
    public $produtos;

    public function adiciona(produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe() {
        foreach($this->produtos as $produto){
            echo $produto->nome . "<br>";
            echo $produto->valor . "<hr>";
        }
    }
}

$produto1 = new produtos("notebook", "1500");
$produto2 = new produtos("mouse", "50");

$carrinho = new carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();
?>