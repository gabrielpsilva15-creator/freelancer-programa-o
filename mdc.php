
<?php
if (isset($_POST["calcular"])) {
    $a = (int) $_POST["a"];
    $b = (int) $_POST["b"];

    $x = $a;
    $y = $b;

    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    echo "MDC = " . abs($a);
}
?>

<form method="post">
    Digite o primeiro número:
    <input type="number" name="a" required>
    <br><br>

    Digite o segundo número:
    <input type="number" name="b" required>
    <br><br>

    <button type="submit" name="calcular">
        Calcular MDC
    </button>
</form>
