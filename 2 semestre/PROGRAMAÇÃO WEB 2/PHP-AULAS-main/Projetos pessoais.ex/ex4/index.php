<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stye.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$num1 = $_GET['n1'] ?? 0;
$num2 = $_GET ['n2'] ?? 0;
$resultado = $num1+$num2;

?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="get">
<label for="n1">Primeiro Numero: </label>
<input type="number" name="n1" id="n1ID" value="<?php echo $num1; ?>">

<label for="n2"> Segundo numero: </label>
<input type="number" name="n2" id="n2ID" value="<?php echo $num2; ?>">


<button type="submit">Calcular</button>
    </form>

<?php

echo" <h1> resultado de $num1 + $num2 = $resultado </h1>";
?>

</body>
</html>