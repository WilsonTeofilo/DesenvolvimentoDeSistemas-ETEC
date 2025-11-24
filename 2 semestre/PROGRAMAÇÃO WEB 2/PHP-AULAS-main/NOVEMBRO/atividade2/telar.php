<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>QUIZ - Nome</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilo.css">
</head>
<body>

<main class="container">
<h1>Bem-vindo ao Quiz!</h1>

<form action="pergunta1.php" method="post">
    <label for="nome">Digite seu nome:</label>
    <input type="text" name="nome" required placeholder="Seu nome completo">
    <button class="btn btn-primary" type="submit">Iniciar Quiz</button>
</form>
</main>

</body>
</html>
