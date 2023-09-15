
<?php 

include('config.php');



//Criação da Tabela
$criando_tb = "CREATE TABLE clientes (
    id_clietes INT(10),
    nome VARCHAR(255) NOT NULL,
    idade INT(5)
)";

//Iserindo Valores
$inserido_vr = "INSERT INTO clientes(id_clietes, nome, idade)
VALUES (1, 'Hiago Souza', 20), (2, 'Maria Aparecida', 53), (3, 'Heitor Souza', 19), (4, 'Gildazio Nonato', 52)";



//primeira ação
/*if ($conexao->query($criando_tb) === TRUE) {
    echo "Tabela criada";
}else{
    echo "Falha da criação" .$conexao-> error;
}
*/

//segunda ação
/*
if ($conexao->query($inserido_vr) === TRUE) {
    echo "Valor Inserido";
}else{
    echo "Falha ao inserir" .$conexao-> error;
}
*/

//Realizando a consulta
$consulta = "SELECT * FROM clientes WHERE idade > 30";
$resulado = $conexao->query($consulta);

while($lista = $resulado->fetch_assoc()){
    echo $lista['nome'] . PHP_EOL;
    echo $lista['idade'] . PHP_EOL;
    echo "<br>";
}
?>