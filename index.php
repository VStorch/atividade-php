<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_crud.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <div class="container">
    <form action="cadastro_usuarios.php" method="POST">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required><br><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>