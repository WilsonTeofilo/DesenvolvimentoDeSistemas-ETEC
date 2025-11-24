<?php 
 echo("Trabalhando com operadores em PHP <br />");
 echo("Operadores de soma <br/>");
 echo("Operadores de subtração <br/>");
 echo("Operadores de multiplicação <br/>");
 echo("Operadores de divisão <br/>");
 
 echo("Insira a operação desejada <br/>");
	$num1 = 10;
	$num2 = 2;

	$resp =$num1 + $num2;
	echo("A soma de $num1 e $num2 é: $resp <br/>");

	$resp =$num1 - $num2;
	echo("A subtração de $num1 e $num2 é: $resp <br/>");

	$resp =$num1 * $num2;
	echo("A multiplicação de $num1 e $num2 é: $resp <br/>");

	$resp =$num1 / $num2;
	echo("A divisão de $num1 e $num2 é: $resp <br/>");

	$resp =$num1 % $num2;
	echo("O resto da divisão de $num1 e $num2 é: $resp <br/>");

 ?>