<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Férias</title>
</head>
<body>
    <h1>Solicitar Férias</h1>
    <form method="POST" action="/TESTE/public/ferias">
        <label for="data">Que dia você quer suas férias?</label>
        <input type="date" id="data" name="data" required><br><br>

        <label for="dias">Quantos dias você quer de férias?</label>
        <input type="number" id="dias" name="dias" min="1" max="30" required><br><br>

        <input type="submit" value="Solicitar">
    </form>
</body>
</html>
