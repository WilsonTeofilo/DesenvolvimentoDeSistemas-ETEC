<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

<?php

if (isset($_SESSION['usuario'])) {
    echo "<p>Usuário logado: " . $_SESSION['usuario'] . "</p>";
}

?>

<form action="validar.php" method="post">
    <h1>Login</h1>

    <label for="login"> Usuário:</label>
    <input type="text" name="login" autocomplete="off">

    <label for="senha">Senha:</label>
    <input type="password" name="senha">

    <button type="submit">Entrar</button>
</form>

</body>
</html>
