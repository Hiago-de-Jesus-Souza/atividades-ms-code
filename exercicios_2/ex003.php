<?php 

$host = "localhost";
$usuario = "root";
$senha = "";
$banco_de_dados = "atividades_agosto";

$conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);

if($conexao->connect_errno){
    echo "Falha na Conexão (". $mysqli->connect_errno . ")" . $mysqli->connect_error;
}else{
    echo "Conexão realizada com sucesso";
}

//Criação da Tabela
$criado_tb = "CREATE TABLE funcionarios (
    id_funcionario INT (255),
    nome VARCHAR (255),
    cargo VARCHAR(255)
)";

//Inserindo valores
$inserido_vr = "INSERT INTO funcionarios 
VALUES (1, 'Hiago', 'Chefe'), (2, 'Maria', 'Administradora'), (3, 'Heitor', 'Professor'), (4, 'Gildazio', 'Gerente')";

//Criação da Tabela
/*
if ($conexao->query($criado_tb)) {
    echo "Tabela criada ";
}else{
    echo "Tabela Não criada";
}
*/

//Inserindo valores
/*
if ($conexao->query($inserido_vr)) {
    echo "Valores inseridos";
}else{
    echo "Valores não inseridos";
}
*/
?>