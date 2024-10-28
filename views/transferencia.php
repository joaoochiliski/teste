<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Solicitar Transferência</title>
</head>
<body>
    <h1>Solicitar Transferência</h1>
    <form method="POST" action="/transferencia">
        <label for="filial">Escolha a filial:</label>
        <select id="filial" name="filial" required>
            <option value="Curitiba/PR">Curitiba/PR</option>
            <option value="Florianópolis/SC">Florianópolis/SC</option>
            <option value="Rio de Janeiro/RJ">Rio de Janeiro/RJ</option>
        </select><br><br>

        <input type="submit" value="Solicitar">
    </form>
</body>
</html>
