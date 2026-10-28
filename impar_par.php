
    <form method="post">
        Digite um número:
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $n = $_POST['numero'];

        if ($n % 2 == 0) {
            echo "O número é par";
        } else {
            echo "O número é ímpar";
        }
    }
    ?>

</body>
</html>