<?php
session_start();

if ($_POST['resposta'] == 'b') {
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
<h2>Pergunta 6</h2>
<form action="pergunta7.php" method="post">
    <p>Em One Piece, qual é o nome do antigo Almirante conhecido como “Aokiji”?</p>
      <img src="fotos/Q6.PNG" alt="Q6" width="300">


<div class=".container">
    
        <input type="radio" name="resposta" value="a"> Ichigo <br>
        <input type="radio" name="resposta" value="b"> Sakazuki <br>
        <input type="radio" name="resposta" value="c"> Kuzan<br>
        <input type="radio" name="resposta" value="d"> Fujitora <br><br>
</div>

    <button class="btn btn-primary" type="submit">Próxima</button>
</form>
</main>

</body>
</html>
