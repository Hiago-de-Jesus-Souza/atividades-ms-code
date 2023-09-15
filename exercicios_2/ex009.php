
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <label for="nome">Digite seu nome: </label>
    <input type="text" name="nome" placeholder="Ex:. Hiago">

    <input type="submit" value="Enviar">

    </form>
</body>
</html>

<?php 

/* [Nomes em letra Maiúscula] - Crie uma função que receba uma
lista de nomes e retorne uma outra lista em que apenas a primeira
letra de cada nome seja maiúscula e o restante minúscula.
*/ 

$nome = $_POST["nome"] ?? "Nenhum nome digitado";

function letra_maiuscula($nome){

    $l_maiuscula = ucwords($nome);
    echo  $l_maiuscula;
}

echo letra_maiuscula($nome);

?>