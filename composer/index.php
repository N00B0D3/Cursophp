<?php 
require_once "vendor/autoload.php";

use Cocur\Slugify\Slugify;

$slug = new Slugify();
$slug->addRule('ão','funcionou');
echo $slug->slugify('Teste com acentuação para geração de slug', '_'); //segndo parametro pra definir o metodo separador

//adicionar regras

?>