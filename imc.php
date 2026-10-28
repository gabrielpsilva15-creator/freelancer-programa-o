
<?php
if (isset($_POST["calcular"])) {
    $peso = (float) $_POST["peso"];
    $altura = (float) $_POST["altura"];

    if ($peso > 0 && $altura > 0) {
        $imc = $peso / ($altura * $altura);

        echo "Seu IMC é: " . round($imc, 2);
    } else {
        echo "Digite valores válidos.";
    }
}
?>

<form method="post">
    Digite seu peso (kg):
    <input type="number" step="0.1" name="peso" required>
    <br><br>

    Digite sua altura (metros):
    <input type="number" step="0.01" name="altura" required>
    <br><br>

    <button type="submit" name="calcular">
        Calcular IMC
    </button>
</form>
