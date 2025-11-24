<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nome1'] = $_POST['nome1'];
    $_SESSION['idade1'] = $_POST['idade1'];
    $_SESSION['peso1'] = $_POST['peso1'];
    $_SESSION['altura1'] = $_POST['altura1'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<title>Tela 2 - Pessoa 2</title>
</head>
<body>

<main class="container">
<h1>Cadastro da Segunda Pessoa</h1>

<form action="tela3.php" method="post">
    <div class="md-3 mb-3">
        <label for="nome2">Nome:</label>
        <input type="text" name="nome2" required placeholder="Digite o nome">
    </div>

    <div class="md-3 mb-3">
        <label for="idade2">Idade:</label>
        <input type="number" name="idade2" required placeholder="Digite a idade">
    </div>

    <div class="md-3 mb-3">
        <label for="peso2">Peso (kg):</label>
        <input type="number" step="0.1" name="peso2" required placeholder="Ex: 70.5">
    </div>

    <div class="md-3 mb-3">
        <label for="altura2">Altura (m):</label>
        <input type="number" step="0.01" name="altura2" required placeholder="Ex: 1.75">
    </div>

    <button type="submit" class="btn btn-primary">Comparar</button>
</form>
</main>

</body>
</html>
