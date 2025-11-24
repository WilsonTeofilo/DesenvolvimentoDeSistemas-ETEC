<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Votação - Clubes de SP</title>
</head>
<body>

<?php

$voto = $_GET['voto'] ?? "";  
$msg = "";                     

if ($voto != "") {


    if (!isset($_COOKIE['voto'])) {

       // aqui eufaço 3600 segundos vezes 24 horas e dps multiplico 24 h por por 30 dias
        setcookie("voto", $voto, time() + 3600 * 24 * 30);

        $msg = "Obrigado por votar!!! ";

    } else {

        $msg = "Você já votou uma vez :(";

    }
}

?>

<h1>Enquete: Qual o melhor clube de São Paulo?</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">

    <label>
        <input type="radio" name="voto" value="Corinthians">
        Corinthians
    </label><br>

    <label>
        <input type="radio" name="voto" value="Palmeiras">
        Palmeiras
    </label><br>

    <label>
        <input type="radio" name="voto" value="Santos">
        Santos
    </label><br>

    <label>
        <input type="radio" name="voto" value="São Paulo">
        São Paulo
    </label><br><br>

    <button type="submit">Votar</button>

</form>

<?php
// Exibe a mensagem
if ($msg != "") {
    echo "<h2>$msg</h2>";
}
?>

</body>
</html>
