<?php 
function titulo(){
	echo ("Calculando valores: <br/>");
}


function somavalor($primeiro,$segundo){
return $primeiro+$segundo;
}

$valor1 = 22; 
$valor2= 33;

$chamada = somavalor($valor1,$valor2);
echo (" a soma de $valor1 + $valor2 == $chamada ");
