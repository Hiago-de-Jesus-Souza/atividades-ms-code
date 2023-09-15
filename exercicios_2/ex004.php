<?php 
$host = "localhost";
$user = "root";
$senha = "";
$banco_de_dados = "atividades_agosto";

$conexao = new mysqli($host, $user, $senha, $banco_de_dados);

if($conexao->errno){
    echo "Falha na conexão(" . $mysqli->connect_error . ")" .$mysqli->connect_error;

}else{
    echo "Conexão realizada com sucesso";
}

//Criação da Tabela
$criacao_tb = "CREATE TABLE pedidos(
    id_pedidos INT(20),
    data INT (50),
    valor INT (50),
    status VARCHAR (100)
)";

/*
if($conexao->query($criacao_tb)){
    echo "criação realizada com sucesso";
}else{
    echo "Erro ao criar";
}
*/
//Inserindo Valores
$inserir_vl = "INSERT INTO pedidos 
VALUES(1, '17-02-2023', 2000, 'vendido'), (2, '17-02-2020', 3000, 'vendido'), (3, '17-02-2023', 1000, 'vendido') ";

/*
if($conexao->query($inserir_vl)){
    echo "valores inseridos com sucesso";
}else{
    echo "Erro ao inserir";
}
*/

$consulta = "SELECT * FROM pedidos WHERE data = 2023";
$resultado = $conexao->query($consulta);

while($lista = $resultado->fetch_assoc()){
    echo $lista['data'] . PHP_EOL;
}

?>