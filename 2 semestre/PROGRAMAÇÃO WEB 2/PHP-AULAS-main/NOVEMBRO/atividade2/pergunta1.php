<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['acertos'] = 0;
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Pergunta 1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilo.css">
</head>
<body>

<main class="container">
<h2>Pergunta 1</h2>
<form action="pergunta2.php" method="post">
    <p>Em Fullmetal Alchemist: Brotherhood, qual é o nome do Homúnculo que representa o pecado da inveja?</p>
<img src="fotos/Q1envy.png" alt="Envy" width="300">

<div class=".container">
    
        <input type="radio" name="resposta" value="a"> Iaquito<br>
        <input type="radio" name="resposta" value="b"> Envy<br>
        <input type="radio" name="resposta" value="c"> Wrath<br>
        <input type="radio" name="resposta" value="d"> Greed<br><br>
</div>

    <button class="btn btn-primary" type="submit">Próxima</button>
</form>
</main>

</body>
</html>
