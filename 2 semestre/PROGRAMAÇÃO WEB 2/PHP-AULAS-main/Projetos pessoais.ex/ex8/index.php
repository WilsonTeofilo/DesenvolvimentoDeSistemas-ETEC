<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php 
$valor = (int) ($_POST['preco'] ??0) ;
$percentual = (int) ($_POST['reajuste'] ??0);
$valorAumento = $valor /100 * $percentual;
$reajuste = $valor +$valorAumento;


?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>"   method="post">
<h1> REAJUSTADOR DE PREÇOS</h1>
<label for="preco"> preço do produto :</label>
<input type="number" name="preco" id="precoID" placeholder="Digite o valor do produto" autocomplete="off" step="0.01">

<label for="reajuste"> Qual sera o percentual do reajuste? <span id="ReajVL"> </span>%</label>
<input type="range" name="reajuste" id="reajusteID" min = "0" max = "100" step="1" oninput="valorporcento()">

<button type="submit"> Calcular</button>


</form>

<section >
<h1> O resultado do reajuste:</h1>
<p> o produto que custava <?php echo number_format($valor, 2 , ",", ".");?> 
<br>

com o aumento de <?php echo "</strong>$percentual %<strong> ";?>
    vai passar a custar <?php echo number_format($reajuste, 2, "," , "."); ?> R$
</p>
</section>

<script>
    valorporcento();
function valorporcento(){
ReajVL.innerText = reajusteID.value;
}

</script>

</body>
</html>