<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<pre>

<?php 
echo "<h1>  Valor dentro de GET (LINK URL): </h1>" ;
var_dump($_GET);

echo "<h1> valor dentro de POST : valor dentro do FORMULÁRIO (interno) : </h1> ";
var_dump($_POST);

echo "valor dentro de as duas, tu usa a global REQUEST: ";
var_dump ($_REQUEST);


setcookie("dia-do-mês", date("D"), time()+3600);

echo 'existe uma variável global chamada COOKIES, sua função é rodar um arquivo no navegador do cliente para o HTTPS passar a ter \"MEMORIA \" <br> quando se tem um carrinho de compra, se tu atualizar o site, o item que colocou SOME; o cookies MANTEM salvo pq tem uma memoria. <br> dados dentro de cookies:';

var_dump($_COOKIE);

echo "existe a variavel GLOBALS que ela junta TODAS AS VARIAVEIS GLOBAIS e forma um vetor relacional com tudo que foi feito no seu código: ";

var_dump($GLOBALS);
?>


</pre>
</body>
</html>