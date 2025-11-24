<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<title>Tela 1 - Pessoa 1</title>
</head>
<body>

<main class="container">
<h1>Cadastro da Primeira Pessoa</h1>

<form action="tela2.php" method="post">
    <div class="md-3 mb-3">
        <label for="nome1">Nome:</label>
        <input type="text" name="nome1" required placeholder="Digite o nome">
    </div>

    <div class="md-3 mb-3">
        <label for="idade1">Idade:</label>
        <input type="number" name="idade1" required placeholder="Digite a idade">
    </div>

    <div class="md-3 mb-3">
        <label for="peso1">Peso (kg):</label>
        <input type="number" step="0.1" name="peso1" required placeholder="Ex: 70.5">
    </div>

    <div class="md-3 mb-3">
        <label for="altura1">Altura (m):</label>
        <input type="number" step="0.01" name="altura1" required placeholder="Ex: 1.75">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</main>

</body>
</html>
