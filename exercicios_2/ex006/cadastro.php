<?php 

include_once('conexao.php');

if(isset($_POST['Enviar'])){
    $nome = $_POST['nome'] ?? "";
    $email = $_POST['email'] ?? "";
    $senha = $_POST['senha'] ?? "";
}


$criacao_tb = "CREATE TABLE cadastro (
    nome VARCHAR(255),
    email VARCHAR(255),
    senha INT(255)
)";
/*
if ($conexao->query($criacao_tb)){
    echo "Tabela criada";
}else{
    echo"Erro ao criar";
}
*/

$valores = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if($conexao->query($valores)){
    echo "Cliente cadastrado";
}else{
    echo"Cliente não cadastrado";
}


?>