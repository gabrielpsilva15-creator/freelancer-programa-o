<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma dos Pares</title>
</head>
<body>

    <h2>Soma dos Números Pares</h2>

    <form method="post">
        Digite um número:
        <input type="number" name="numero" min="1" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $n = $_POST['numero'];
        $soma = 0;

        for ($i = 2; $i <= $n; $i += 2) {
            $soma += $i;
        }

        echo "A soma dos números pares de 1 até $n é: $soma";
    }
    ?>

</body>
</html>