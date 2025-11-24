<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>

<h1>Seja bem-vindo <?php echo $_SESSION['usuario']; ?>!</h1>

<a href="sair.php " > </br> <h2>Sair</h2>

</body>
</html>
