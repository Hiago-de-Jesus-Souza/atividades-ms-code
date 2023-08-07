<?php 
$nuns = [12, 50, 26, 90, 13];

function segundo_maior($nuns) {

    rsort($nuns);
    echo $nuns[1];
    
}

echo segundo_maior($nuns);

?>