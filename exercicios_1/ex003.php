<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <label for="inum">Digite alguns números</label>
    <input name="inum" type="text">

    <button type="submit">Enviar</button>

    </form>

    <?php
    
    $nuns = [1, 2, 3, 4, 5, 6, 8, 9, 10];

    function numero_faltando($nuns) {

        echo $nuns[4];
        unset($nuns[4]);

    }

    echo numero_faltando($nuns);

    ?>

</body>
</html>