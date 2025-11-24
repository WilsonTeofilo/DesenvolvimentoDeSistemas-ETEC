<?php
session_start();

if ($_POST['resposta'] == 'c') {
    $_SESSION['acertos']++;
}

$nome = $_SESSION['nome'];
$acertos = $_SESSION['acertos'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado do Quiz</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilo.css">
</head>
<body>

<main class="container">
<h1>Resultado Final</h1>
<p><strong>Participante:</strong> <?php echo $nome; ?></p>
<p><strong>Total de acertos:</strong> <?php echo $acertos; ?> de 10</p>

<form action="telar.php" method="post">
    <button class="btn btn-primary" type="submit">Reiniciar Quiz</button>
</form>

<?php session_destroy(); ?>
</main>

</body>
</html>
