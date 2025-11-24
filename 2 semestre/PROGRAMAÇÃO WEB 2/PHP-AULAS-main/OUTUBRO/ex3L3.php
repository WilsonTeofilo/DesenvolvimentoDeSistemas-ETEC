<?php  
$tipo = [-1,50,20,-3,55,20,3,-55,0,10];

for ($cont =0; $cont <count ($tipo); $cont++){
$tipo [$cont];

if ($tipo[$cont] <0){
  print "negativos: ". $tipo[$cont] . "<br>";
}

else if ($tipo[$cont] >0){
    print "Positivos: ". $tipo[$cont] . "<br>";
  }

  else if ($tipo[$cont] %2==0){
    print "Numero Par: ". $tipo[$cont] . "<br>";
  }

  else if ($tipo[$cont] %2 !=0){
    print "Numeros Impares: ". $tipo[$cont] . "<br>";
  }
}
?>