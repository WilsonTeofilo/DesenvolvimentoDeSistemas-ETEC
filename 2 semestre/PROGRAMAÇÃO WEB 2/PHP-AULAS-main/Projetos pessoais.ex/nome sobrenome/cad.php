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

$nome = $_GET['nome'] ?? "desconhecido";
$sobrenome = $_GET['sobrenome'] ?? "desconhecido";


echo "olá  " . $nome ." " .$sobrenome .", bem vindo ao meu site";

?>
<br>
<a id="voltar" href="index.html"> voltar para pagina inicial</a>    
</body>
</html>