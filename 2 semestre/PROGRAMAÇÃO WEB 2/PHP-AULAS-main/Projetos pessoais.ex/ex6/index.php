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
$salario = $_POST['n1'] ??0;
$minimo = 1500;
$quantos = intdiv ($salario,$minimo);
$totalminimo = $minimo * $quantos;
$sobrasalario = $salario - $totalminimo;




?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <h1>INFORME SEU SALÁRIO</h1>
<label for="n1"> R$</label>
<input type="number" name="n1" id="n1ID" value="" autocomplete="off" placeholder="Digite seu salário:" step="0.01">
<p>Consideramos o salário minimo o total de <strong>1500 R$</strong></p>

<button type="submit">Calcular</button>


</form>

<h1 class="resultado"> 
    <?php echo "Quem recebe um salário de  " . $salario = number_format($salario, 2 , "," , ".") . "R$ </br>";
    echo "ganha $quantos salários minimos" . " + " .$sobrasalario . "R$";
    ?> 
</h1>
    
</body>
</html>