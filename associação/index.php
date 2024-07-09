<?php 
class pedido{
    public $numero;
    public $cliente;
}

class cliente{
    public $nome;
    public $endereço;
}

$cliente = new cliente();
$cliente->nome = "Ruan Patrick";
$cliente->endereço = "Rua Papa Jõao XXIII, 255";

$pedido = new pedido();
$pedido->numero = "1";
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereço_cliente' => $pedido->cliente->endereço
);

var_dump($dados)
?>