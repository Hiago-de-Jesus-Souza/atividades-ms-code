<?php 

//variaveis 
$host = "localhost";
$usuario = "root";
$senha = "";
$banco_de_dados = "atividades_agosto";

//conexão
$conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);

if($conexao->connect_errno){
    echo "falha ao conectar: (" . $mysqli->connect_errno .")" . $mysqli->connect_errno;
 }else{
    echo "Conectado ao Banco de Dados";
}

?>