<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contagem Regressiva</title>
</head>
<body>

    <h2>Contagem Regressiva</h2>

    <form method="post">
        Digite um número:
        <input type="number" name="numero" min="0" required>
        <button type="submit">Contar</button>
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $n = intval($_POST['numero']);

        for ($i = $n; $i >= 0; $i--) {
            echo $i . "<br>";
        }

        echo "Fim da contagem!";
    }
    ?>

</body>
</html>