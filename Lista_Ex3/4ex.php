<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
</head>

<body>
    <h2>Validar data</h2>
    <form action="4res.php" method="post">
        <label>Dia: <input type="number" name="dia" min="1" max="31" required></label><br><br>
        <label>Mês: <input type="number" name="mes" min="1" max="12" required></label><br><br>
        <label>Ano: <input type="number" name="ano" min="1" required></label><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>