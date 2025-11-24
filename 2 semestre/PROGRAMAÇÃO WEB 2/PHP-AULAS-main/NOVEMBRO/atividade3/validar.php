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
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == "admin" && $senha == "1234") {
    $_SESSION['usuario'] = "Administrador";
}

elseif ($login == "visit" && $senha == "12345") {
    $_SESSION['usuario'] = "Visitante";
}

elseif ($login == "colab" && $senha == "123456") {
    $_SESSION['usuario'] = "Colaborador";
}

else {
echo "<script>
        alert('Login ou senha incorretos!');
        window.location.href = 'index.php';
    </script>";
    exit;
}


header("Location: bemvindo.php");
exit;
?>

    
</body>
</html>


