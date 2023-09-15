<?php 
$host = "localhost";
$usuario = "root";
$senha = "";
$bando_de_dados = "atividades_agosto";

$conexao = new mysqli($host, $usuario, $senha, $bando_de_dados);

if($conexao->errno){
    echo "Falha na conexão(" . $mysqli->connet_error . ")" . $mysqli->connet_error;
}else{
    echo "Conexão realizada com sucesso";
}

?>