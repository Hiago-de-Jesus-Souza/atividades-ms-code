<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xadrez</title>
</head>
<body>
    <form action="" method="post">
        <label for="col1">Coluna 1</label>
        <input type="text" name="col1">

        <label for="col2">Coluna 2</label>
        <input type="text" name="col2">

        <input type="submit" value="Enviar">
    </form>
</body>

<?php 
$coluna1 = $_POST['col1'] ?? 'nenhum valor inserido';
$coluna2 = $_POST['col2'] ?? 'nenhum valor inserido';

function tabuleiro($coluna1, $coluna2) {

    if (similar_text($coluna1, $coluna2)) {
        echo 'SE ATACAM';
        //return 'TRUE';
    }else{
        echo 'NÃO SE ATACAM';
        //return 'FALSE';
    }
}

echo tabuleiro($coluna1, $coluna2);

?>

</html>