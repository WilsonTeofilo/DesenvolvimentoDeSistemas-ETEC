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
<h2>Pergunta 2</h2>
<form action="pergunta3.php" method="post">
    <p>Em Attack on Titan, quem foi o primeiro portador conhecido do Titã Fundador?</p>
    <img src="fotos/Q2.jpg" alt="Q2" width="300">

    <div class=".container">
        <input type="radio" name="resposta" value="a"> Ymir Fritz<br>
        <input type="radio" name="resposta" value="b"> Eren Yeager<br>
        <input type="radio" name="resposta" value="c"> Grisha Yeager<br>
        <input type="radio" name="resposta" value="d"> Levi Ackermann<br><br>
    </div>

    <button class="btn btn-primary" type="submit">Próxima</button>
</form>
</main>

</body>
</html>
