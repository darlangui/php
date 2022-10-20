<?php
// O array do PHP utiliza uma forma simplifica de alocamento em memória --> array por associação ( no PHP todos serão isso vc definindo ou não ) e essa alocação é realizada por hashmap na memória. --> DIFERENTE DE OUTRAS LINGUAGENS.
// Sobre conversão de variaveis dentro do array no php ( Lembrando que toda key do array associativo será transformada em inteiro ) --> https://www.php.net/manual/en/language.types.integer.php#language.types.integer.casting

// array de testes

$array = [1 => 'um', 2 => 'dois', 3 => 'tres'];

//  foreach

    foreach($array as $numero => $nomeNumero){
        echo $nomeNumero . PHP_EOL;
    }

    //informa a quantidade de valores dentro do count($array) --> mais utilizada ou sizeof($array).

    //algoritmo de ordenação de array --> sort($array) --> altera diretamento onde os valores do array foram alocados.
    //usort($array, $callback) --> isso serve para definir o critério de ordenação.
    //rsort($array) --> forma decrecente.


?>