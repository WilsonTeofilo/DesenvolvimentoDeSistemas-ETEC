<?php 
// você devera mostrar no final
// salário folha  R$
//Desconto inss :  R$
// Desconto imposto de renda : R$
// Salário Líquido : R$

$salario = 2410;
$descontoINSS = 0;
$descontoIR = 0;
print "Salário Folha : $salario R$ <br>" ;
print"calculando desconto De INSS e IR <br>";

function inss($salario){
    return $descontoINSS= ($salario * 14) /100;
}


  $ChamadaInss = inss ($salario);
  echo "desconto INSS: $ChamadaInss R$,  <br> " ; 
  $salario -= $ChamadaInss;
  echo "Salario descontado INSS: $salario R$ <br>";


  function ir ($salarioIR){

    if ($salarioIR <=2259.20){
    return $descontoIR=0;
}

else if ($salarioIR >=2259.21 && $salarioIR <= 2826.65){
   $descontoIR =($salarioIR* 7.5) /100;
   return $descontoIR;

}
  }

  $ChamadaIR = ir ($salario);
  echo "Desconto de imposto de renda = $ChamadaIR <br>";
  $salario -= $ChamadaIR;
  echo "salário Liquido com todos descontos = $salario"

?>