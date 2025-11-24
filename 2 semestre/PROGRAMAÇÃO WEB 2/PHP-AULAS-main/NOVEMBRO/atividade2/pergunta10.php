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
<h2>Pergunta 10</h2>
<form action="resultado.php" method="post">
    <p>o nome dos personagens de anime : ichigo,gohan e naruto são inspirados em:</p>
  <img src="fotos/Q10.jpg" alt="Q10" width="300">
    

    <div class=".container">
        <input type="radio" name="resposta" value="a"> cidade e bairro dos autores <br>
        <input type="radio" name="resposta" value="b"> Lendas Samurais Japonesas <br>
        <input type="radio" name="resposta" value="c"> Comidas <br>
        <input type="radio" name="resposta" value="d">   absolutamente nada <br><br>
    </div>

    <button class="btn btn-primary" type="submit">Próxima</button>
</form>
</main>

</body>
</html>
