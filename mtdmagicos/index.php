<?php 
//Clone*
//Construct*
//invoke*
//tostring*
//Get*
//Set*

/*class pessoa{
    private $nome;

    public function __set($nome, $valor)
    {
        $this->nome = $valor;
    }

    public function __get($nome)
    {
        return $this->nome;
    }
}

$pessoa = new pessoa();
$pessoa->nome = "José";

echo $pessoa->nome; */

class pessoa {
    private $dados = array();

    public function __set($name, $value)
    {
        $this->dados[$name] = $value;
    }

    public function __get($name)
    {
        return $this->dados[$name];
    }

    public function __toString()
    {
        return "tentei imprimir o objeto";
    }

    public function __invoke()
    {
        return "Objeto como função";
    }
}

$pessoa = new pessoa();
$pessoa->name = "Ruan";
$pessoa->idade = 24;
$pessoa->sexo = "M";

echo $pessoa();

?>