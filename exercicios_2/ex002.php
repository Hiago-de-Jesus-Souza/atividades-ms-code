<?php 

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

//Criação da Tabela
$criar_tb = "CREATE TABLE produtos(
    id_produto INT(255),
    nome VARCHAR(255),
    preco INT(255)
)";

//Iserindo Valores
$inserido_vr = "INSERT INTO produtos (id_produto, nome, preco) 
VALUES (1, 'Celular', 50), (2, 'Notebook', 50), (3, 'Tablet', 2.000), (4, 'Desktop', 6.000)";

$consulta = "SELECT * FROM produtos WHERE preco <= 50";
$resultado = $conexao->query($consulta);

while ($lista = $resultado->fetch_assoc()) {
echo $lista['nome'] . PHP_EOL;
echo $lista['preco'] . PHP_EOL;
}


//realizando a criação do Banco de dados
/*
if ($conexao->query($criar_tb)){
    echo "A tabela criada";
}else {
    echo "Falha na criação" . $conexao->error;
}
*/

/*
//realizando a ação 
if ($conexao->query($inserido_vr)){
    echo "Valores inseridos";
}else {
    echo "Valores não inseridos" . $conexao->error;
}
*/
?>