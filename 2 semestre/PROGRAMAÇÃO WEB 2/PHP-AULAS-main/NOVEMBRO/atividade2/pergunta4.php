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
<h2>Pergunta 4</h2>
<form action="pergunta5.php" method="post">
    <p>Em Bleach, qual é o nome da Bankai de Byakuya Kuchiki?</p>
    <img src="fotos/Q4.jpg" alt="Q4" width="300">

    
<div class=".container">
    
        <input type="radio" name="resposta" value="a"> Aizen <br>
        <input type="radio" name="resposta" value="b"> Tensa Zangetsu<br>
        <input type="radio" name="resposta" value="c"> Zabimaru<br>
        <input type="radio" name="resposta" value="d"> Senbonzakura Kageyoshi<br><br>
</div>

    <button class="btn btn-primary" type="submit">Próxima</button>
</form>
</main>

</body>
</html>
