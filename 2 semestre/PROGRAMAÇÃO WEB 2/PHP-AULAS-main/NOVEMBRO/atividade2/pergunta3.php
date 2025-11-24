<?php
session_start();

if ($_POST['resposta'] == 'a') {
    $_SESSION['acertos']++;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Pergunta 2</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilo.css">
</head>
<body>

<main class="container">
<h2>Pergunta 3</h2>
<form action="pergunta4.php" method="post">
    <p>Qual o personagem mais forte de jujutsu no kaizen?</p>
    <img src="fotos/Q3.jpg" alt="Q3" width="300">

    
<div class=".container">
    
        <input type="radio" name="resposta" value="a"> Gojo<br>
        <input type="radio" name="resposta" value="b"> Sukuna<br>
        <input type="radio" name="resposta" value="c"> Yuta<br>
        <input type="radio" name="resposta" value="d"> Mahoraga<br><br>
</div>

    <button class="btn btn-primary" type="submit">Próxima</button>
</form>
</main>

</body>
</html>
