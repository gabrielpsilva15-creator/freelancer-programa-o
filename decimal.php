<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Decimal para Binário</title>
</head>
<body>

    <form method="post">
        Digite um número decimal:
        <input type="number" name="numero" min="0" required>
        <button type="submit">Converter</button>
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = (int) $_POST['numero'];

        echo "Decimal: " . $numero . "<br>";
        echo "Binário: " . decbin($numero);
    }
    ?>

</body>
</html>