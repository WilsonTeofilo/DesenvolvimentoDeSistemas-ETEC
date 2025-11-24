<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nome2'] = $_POST['nome2'];
    $_SESSION['idade2'] = $_POST['idade2'];
    $_SESSION['peso2'] = $_POST['peso2'];
    $_SESSION['altura2'] = $_POST['altura2'];
}

$maisAlto = ($_SESSION['altura1'] > $_SESSION['altura2']) ? $_SESSION['nome1'] : $_SESSION['nome2'];
$maisVelho = ($_SESSION['idade1'] > $_SESSION['idade2']) ? $_SESSION['nome1'] : $_SESSION['nome2'];
$maisPesado = ($_SESSION['peso1'] > $_SESSION['peso2']) ? $_SESSION['nome1'] : $_SESSION['nome2'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<title>Resultados</title>
</head>
<body>

<main class="container">
<h1>Resultados da Comparação</h1>

<p><strong>Quem tem a maior altura :</strong> <?php echo $maisAlto; ?></p>
<p><strong>Quem é mais velho:</strong> <?php echo $maisVelho; ?></p>
<p><strong>Quem tem o peso maior:</strong> <?php echo $maisPesado; ?></p>

<a href="tela1.php" class="btn btn-primary">Voltar ao início</a>
</main>

</body>
</html>
