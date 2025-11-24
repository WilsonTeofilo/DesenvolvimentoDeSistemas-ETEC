<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>analisador de Número Real</h1>



<?php
$real = $_POST['numero'];
$inteiro = (int) $real;
$resto = $real - $inteiro;
?>




<div class="resultado">
    <h2>Resultado</h2>

    <p><strong>Número digitado:</strong> 
        <?php echo number_format($real, 3, ",", "."); ?>
    </p>

    <p><strong>Parte inteira:</strong> 
        <?php echo number_format($inteiro, 0, ",", "."); ?>
    </p>

    <?php if ($resto > 0): ?>
        <p><strong>Parte fracionária:</strong> 
            <?php echo number_format($resto, 3, ","); ?>
        </p>
        
    <?php else: ?>
        <p><strong>Este número não contém parte decimal.</strong></p>
    <?php endif; ?>
</div>

</body>
</html>
