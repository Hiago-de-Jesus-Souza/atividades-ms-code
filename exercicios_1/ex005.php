<?php 

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_bd = "empresa";

$conexao = new mysqli($nome_servidor,$nome_usuario,$senha,$nome_bd);
if ($conexao->connect_error) {
    die("Conexão Falhou: " .$conexao->connect_error);
}else {
echo "Conexão Funcionou !!";
}

// criação de banco de dados

$criar_banco = "CREATE DATABASE empresa";

$criar_tabela = "CREATE TABLE produtos(
    id INT(6),
    titulo VARCHAR(255) NOT NULL,
    pagamento int(30),
    valor INT(6)

)";

$inserir_valor = " INSERT INTO produtos (id, titulo, pagamento, valor)VALUES 
(1, 'canetas', '2019-07-05', 180),
(2, 'notebook', '2019-07-01', 1200),
(3, 'macbook', '2019-07-02', 2100),
(4, 'microfone', '2019-07-05', 90),
(5, 'matricula_alura', '2019-07-09', 900),
(6, 'gasolina_reembolso_direto', '2019-07-10', 200)";

$consulta = "SELECT * FROM produtos";
$query_select = mysqli_query($conexao, $consulta);


//inserir os valores
/*
if($conexao->query($inserir_valor) === true){
 echo "A consulta foi realizada";
}else{
    echo "Ocorreu um erro na consulta: " . $conexao -> error;
}
*/

//Retornado os valores na tela
echo "<br>";
while($registros = mysqli_fetch_array($query_select)){

echo $registros["id"];
echo $registros["titulo"];
echo $registros["pagamento"];
echo $registros["valor"];
echo "<br>";

}
?>