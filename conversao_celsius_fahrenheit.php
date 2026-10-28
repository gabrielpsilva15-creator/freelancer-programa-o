
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Temperatura</title>
</head>
<body>

    <h2>Converter Celsius para Fahrenheit</h2>

    <form method="post">
        Celsius:
        <input type="number" name="celsius" step="any" required>
        <button type="submit">Converter</button>
    </form>

    <?php
    if (isset($_POST['celsius'])) {
        $celsius = $_POST['celsius'];

        $fahrenheit = ($celsius * 9 / 5) + 32;

        echo "Temperatura em Fahrenheit: " . $fahrenheit . " °F";
    }
    ?>

</body>
</html>
