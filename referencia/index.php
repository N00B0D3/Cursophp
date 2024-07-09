<?php 
//referencia e clonagem

class pessoa {
    public $idade;

    //metodo magico: utilizado neste caso quando é feito uso da palavra chave clone
    public function __clone() {
        echo "Clonagem de objetos";
    }
}

$pessoa = new pessoa();
$pessoa->idade = 25;

$pessoa2 =  clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa2->idade

// retorna a idade de $pessoa, pois pessoa2 não é uma nova instancia da classe pessoa, e sim um objeto que faz referencia ao objeto $pessoa


/*$pessoa2 = clone $pessoa;
$pessoa->idade = 35;

echo $pessoa->idade; 
//retorna 25 pois aqui $pessoa2 é um clone de pessoa*/  

?>