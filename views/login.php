<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
        <form method="POST" action="/TESTE/public/login.php">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Entrar">
        </form>
</body>
</html>
