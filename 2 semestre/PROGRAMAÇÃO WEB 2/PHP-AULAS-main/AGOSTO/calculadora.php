<?php 
$n1 = 33;
$n2 = 15;
$seletor = 2;


print" Números a ser calculado :";
print "  $n1 x $n2  <br>";
print" Selecione a operação a ser realizada  :  <br>";
print "1 - soma (+) , 2 - subtração (-), 3 - divisão (÷) , 4- multiplicação (x) <br> <br>" ; 
//soma
function soma ($numSoma1,$numSoma2){
return $numSoma1 + $numSoma2;
}
$respostaSoma = soma($n1, $n2);
//sub

function subtracao ($numSub1,$numSub2){
return $numSub1 - $numSub2;
}
$respostaSub = subtracao($n1, $n2);

//divisão



function divisao ($numDiv1,$numDiv2){
return $numDiv1 / $numDiv2;
}
$respostaDiv = divisao ($n1, $n2);



function multiplicacao($numSub1, $numSub2){
    return $numSub1 * $numSub2;

}

$respostaMulti = multiplicacao($n1,$n2);


if ($seletor== 1){
    echo "VOCÊ SELECIONOU SOMA:<BR>" ;
echo "o resultado de $n1 + $n2 = $respostaSoma <br>";
}


//reposta sub
else if ($seletor==2){
    echo "VOCÊ SELECIONOU SUBTRAÇÃO <BR>";
echo "o resultado de $n1 - $n2 = $respostaSub <br>";
}


else if ($seletor==3){
    echo "VOCÊ SELECIONOU DIVISÃO:<BR>";
    echo "o resultado de $n1 ÷ $n2 = $respostaDiv <br>";
}

else if ($seletor == 4){
      echo "VOCÊ SELECIONOU MULTIPLICAÇÃO:<BR>";
    echo "o resultado de $n1 x $n2 = $respostaMulti <br>";
}

?>





