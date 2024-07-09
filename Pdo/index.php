<?php 
require_once 'vendor/autoload.php';

// $produto = new \App\Model\Produto();
// $produto->setId(7);
// $produto->setNome('cadeira');
// $produto->setDescricao('gamer');

$produtodao = new \App\Model\ProdutoDao();
$produtodao->delete(3);
$produtodao->read();

foreach($produtodao->read() as $produto):
    echo $produto['nome']. "<br>" . $produto['descricao']. "<hr>";
endforeach;
?>
