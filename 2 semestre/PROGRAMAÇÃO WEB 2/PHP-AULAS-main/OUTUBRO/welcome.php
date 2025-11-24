<?php 

$nome= $_POST['name'];
$email= $_POST['email'];

if ($nome === "dipirono" && $email === "dipironosodico@live.com"){
    echo "
     <table 
    <tr>
    <td>  Bem vindo ao sistema  </td>
    </tr>
    </table>";
}

else {
    echo "<strong> Login Inválido </strong>";
     
}
?>