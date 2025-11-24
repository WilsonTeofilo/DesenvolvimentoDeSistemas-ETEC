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
<h2>Pergunta 9</h2>
<form action="pergunta10.php" method="post">
    <p>com quem Ichigo kurosaki se casa no final de bleach?</p>
  <img src="fotos/Q9.jpg" alt="Q9" width="300">


<div class=".container">
    
        <input type="radio" name="resposta" value="a"> Yoruichi Shihōin <br>
        <input type="radio" name="resposta" value="b"> Tatsuki Arisawa <br>
        <input type="radio" name="resposta" value="c"> Orihime inoue<br>
        <input type="radio" name="resposta" value="d">  Rukia Kuchik<br><br>
</div>

    <button class="btn btn-primary" type="submit">Próxima</button>
</form>
</main>

</body>
</html>
