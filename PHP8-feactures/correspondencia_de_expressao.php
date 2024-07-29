<?php

    $busca = 19;

    switch($busca) { // Comparação por igualdade/equalidade (==)
        case '1':
            $retornoSwitch = 'Encontrou no case 1';
            break;
        case 2:
            $retornoSwitch = 'Encontrou o número 2';
            break;
        default:
            $retornoSwitch = 'Não encontrou';
    }

    echo "Resultado switch: ".$retornoSwitch;
    echo "<hr>";

    /*
    $retornoMatch = match ($busca) { // Comparação é feita por identidade/estrita (===)
        '1' => 'Encontrou o texto ',
        1 => 'Encontrou o número 1',
        5, '8', 12, 'x' => 'Encontrou o valor 5 ou 12, ou os textos 8 ou x',
        default => 'Não encontrou'
    };
    */

    // Match com condicionais e operações lógicas
    $retornoMatch = match (true) {
        $busca < 20 => 'Encontrou',
        $busca >=20 && $busca <=30 => 'Encontrou um valor maior que 20 e menor que 30',
        default => 'Não encontrou'
    };

    echo "Resultado match: ".$retornoMatch;

?>