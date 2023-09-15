<?php 

include_once('conexao.php');

if(isset($_POST['enviar'])){
    $comentario = $_POST['comentario']; 
}


$criacao_tb = "CREATE TABLE comentario (
    comentario VARCHAR(255)
)";

/*
if($conexao->query($criacao_tb)){
    echo "Tabela criada com sucesso";
}else{
    echo "Erro ao criar";
}
*/

$valores = "INSERT INTO comentario (comentario)
VALUE ('$comentario')";

if($conexao->query($valores)){
    echo "Valor inserido";
}else{
    echo "Erro ao inserir";
}

$consulta = "SELECT * FROM comentario";
$resultado = $conexao->query($consulta);

while ($lista = $resultado->fetch_assoc()) {
echo $lista['comentario'];

}


?>