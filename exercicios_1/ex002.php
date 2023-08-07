<?php 
function impar($recebeLista){
    $numero = 1;

    for ($i=0; $i <= 9 ; $i++) { 
        echo $recebeLista[$i] . " ";
        
        if($recebeLista[$i] % 2 != 0){
            $numero *= $recebeLista[$i];
        }
    }

    return $numero;
}
$impar = array(1, 2, 35, 17, 5, 9, 22, 13, 40, 20);
echo impar($impar);
?>