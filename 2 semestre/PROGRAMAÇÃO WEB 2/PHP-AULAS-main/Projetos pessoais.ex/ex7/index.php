<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$nascimento = $_POST['nascimento'] ??0;
$futuro = $_POST['futuro'] ?? 0;
$idade = $futuro-$nascimento


?>


    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<label for="nascimento">em que ano você nasceu?</label>
<input type="number" name="nascimento" id="nascimentoID" min = "1" max = "9999">
<label for="futuro"> quer saber sua idade em qual ano? atualmente estamos em <?php echo date('Y'); ?></label>
<input type="number" name="futuro" id="futuroID" min = "1" max = "9999">
<button type="submit">Calcular idade</button>
    </form>

    <h1> Resultado: </h1>
    <p><?php echo "quem nasceu em ".$nascimento. " vai ter " .$idade . " anos de idade em " . $futuro; ?> </p>

</body>
</html>