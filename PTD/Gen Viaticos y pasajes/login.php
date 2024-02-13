<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form action="login.php" method="post">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="subdelegacion">Subdelegación:</label>
        <select name="subdelegacion" required>
            <option value="Orizaba">Orizaba</option>
            <option value="Cordoba">Córdoba</option>
            <option value="Coatzacoalcoz">Coatzacoalcoz</option>
            <option value="Cozamaloapan">Cozamaloapan</option>
        </select><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
