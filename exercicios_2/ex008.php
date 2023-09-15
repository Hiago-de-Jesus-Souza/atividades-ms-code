
<?php 

/*[limpeza de lista] Crie uma função que limpe uma lista, removendo
todos os itens duplicados dela e retorne com a lista limpa. (a ordem
final dos números não importa)*/ 

$lista = [1, 2, 2, 3, 4, 5, 5, 6, 7];

function numero_repetido($lista){
    $sem_repeticao = array_unique($lista);
    print_r($sem_repeticao);
}

echo numero_repetido($lista);

?>