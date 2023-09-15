<?php 

include_once('conexao.php'); 

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    //criando minha consulta - pegar o valor de dentro db
    $sql_consulta = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";

    $resultado = $conexao->query($sql_consulta);
    
    //verificando as possibilidades dos resultados
    if ($resultado->num_rows === 1) {
        $lista = $resultado->fetch_assoc();
        //verificação de senha
        if ($senha === $lista["senha"]) {
            echo "Logado com sucesso";
        } else{
            echo "Senha incorreta, tente novamente! ";
        }
    } else {
        echo "Usuario não encontrado, faça o cadastro!";
    }

    //finalizando a conexao
    $conexao->close();

}