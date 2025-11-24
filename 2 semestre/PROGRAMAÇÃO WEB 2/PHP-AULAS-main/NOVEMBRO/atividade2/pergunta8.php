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
<h2>Pergunta 8</h2>
<form action="pergunta9.php" method="post">
    <p>entre esses ,qual é o personagem mais forte de Naruto Shippuden?</p>
      <img src="fotos/Q8.JPG" alt="Q8" width="300">

    <div class=".container">
        <input type="radio" name="resposta" value="a"> Madara Uchiha <br>
        <input type="radio" name="resposta" value="b"> Naruto <br>
        <input type="radio" name="resposta" value="c"> Sasuke Uchiha<br>
        <input type="radio" name="resposta" value="d">  Might guy <br><br>
    </div>

    <button class="btn btn-primary" type="submit">Próxima</button>
</form>
</main>

</body>
</html>
