<?php

$vetor = [10, 20, 30, 40, 50];
$buscar = 30;

if (in_array($buscar, $vetor)) {
    echo "Número encontrado!";
} else {
    echo "Número não encontrado!";
}

?>