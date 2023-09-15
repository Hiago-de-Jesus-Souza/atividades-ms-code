<?php 

$host = "localhost";
$usuario ="root";
$senha = "";
$banco_bd = "atividades_agosto";

$conexao = new mysqli($host, $usuario, $senha, $banco_bd);

if($conexao->errno){
    echo "Erro na conexão(" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}else{
    echo "Conexão realizada com sucesso";
}


?>