<?php
session_start();

if ($_POST['resposta'] == 'c') {
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
<h2>Pergunta 7</h2>
<form action="pergunta8.php" method="post">
    <p>Em death note, quem mata L??</p>
      <img src="fotos/Q7.jpg" alt="Q7" width="300">

    <div class=".container">
        <input type="radio" name="resposta" value="a"> Kira <br>
        <input type="radio" name="resposta" value="b"> Teru Mikami <br>
        <input type="radio" name="resposta" value="c"> melo<br>
        <input type="radio" name="resposta" value="d"> Rem <br><br>
    </div>

    <button class="btn btn-primary" type="submit">Próxima</button>
</form>
</main>

</body>
</html>
