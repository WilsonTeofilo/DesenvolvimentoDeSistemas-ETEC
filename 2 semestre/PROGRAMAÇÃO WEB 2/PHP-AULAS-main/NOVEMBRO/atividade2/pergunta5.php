<?php
session_start();

if ($_POST['resposta'] == 'd') {
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
<h2>Pergunta 5</h2>
<form action="pergunta6.php" method="post">
    <p>com quantos anos sasuke despertou o mangekyou sharingan</p>
  <img src="fotos/Q5.PNG" alt="Q5" width="300">


    <div class=".container">
    
        <input type="radio" name="resposta" value="a"> 14 <br>
        <input type="radio" name="resposta" value="b"> 16 <br>
        <input type="radio" name="resposta" value="c"> 17<br>
        <input type="radio" name="resposta" value="d"> 18 <br><br>
</div>

    <button class="btn btn-primary" type="submit">Próxima</button>
</form>
</main>

</body>
</html>
