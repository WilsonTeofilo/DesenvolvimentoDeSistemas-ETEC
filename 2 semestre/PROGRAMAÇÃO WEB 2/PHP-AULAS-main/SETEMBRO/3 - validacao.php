<?php 
print "Teste para descobrir se você pode ser filha ou esposa do leonardo dicaprio :<br> <br> ";
print "Digite seu sexo e sua idade,  ";
print "PARA MASCULINO DIGITE 'M' E PARA FEMININO DIGITE 'F'  <br> <br> ";

$sexo = "M";
$idade = 25;

print "SEXO : $sexo <br>";
print "IDADE: $idade <br>";


if ( $sexo == "F" && $idade <25){
print "VOCÊ FOI APROVADA";
}
else {
    print "REPROVADO";
}
?>