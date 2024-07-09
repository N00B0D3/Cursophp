<?php 
// message, code, file, line para mostrar mensagem, codigo, arquivo e linha da exceção


//tratamento de exceções
class newsletter {
    public function CadastrarEmaail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("este email é invalido", 1);
        else:
            echo "Email cadastrado com sucesso";
        endif;
    }
}

$newsletter = new newsletter();

// tratamento de exceção
try {
$newsletter->CadastrarEmaail("contato@");
} catch(Exception $e) {
    echo "mensagem: " . $e->getMessage() . "<br>";
    echo "codigo: " . $e->getcode() . "<br>";
    echo "arquivo: " . $e->getfile() . "<br>";
    echo "linha: " . $e->getline() . "<br>";
}