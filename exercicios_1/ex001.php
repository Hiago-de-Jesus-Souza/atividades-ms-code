<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">

        <label for="nome">Digite uma palavra</label>
        <input type="text" name="nome">

    </form>
    
</body>
</html>


<?php 
    /* Crie uma função que retorne “true” se uma string contiver
    espaços. A função aceita o String como um argumento */

$texto = $_POST['nome'] ?? ' ';

function contem_espaco($texto){

    if (str_contains($texto, " ")) {
        echo "Contem espaço";
    }else{
        echo "Não possui espaço";
    }
    
}

echo contem_espaco($texto);

?>







