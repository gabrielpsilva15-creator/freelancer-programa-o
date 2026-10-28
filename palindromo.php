
<?php

function ePalindromo($texto) {
    $textoLimpo = strtolower(str_replace(" ", "", $texto));

    $textoInvertido = strrev($textoLimpo);

    return $textoLimpo == $textoInvertido;
}

$testes = ["arara", "ovo", "radar", "PHP", "Ame a ema"];

foreach ($testes as $palavra) {
    if (ePalindromo($palavra)) {
        echo $palavra . " é um palíndromo.<br>";
    } else {
        echo $palavra . " não é um palíndromo.<br>";
    }
}

?>
