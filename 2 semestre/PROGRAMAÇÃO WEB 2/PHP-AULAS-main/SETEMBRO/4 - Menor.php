<?php
$num1 = 55;
$num2 = 33;
$num3 = 1;

echo "Validando números do maior pro menor<br>";

if ($num1 > $num2 && $num1 > $num3) {
    $maior = $num1;
} elseif ($num2 > $num1 && $num2 > $num3) {
    $maior = $num2;
} else {
    $maior = $num3;
}

if ($num1 < $num2 && $num1 < $num3) {
    $menor = $num1;
} elseif ($num2 < $num1 && $num2 < $num3) {
    $menor = $num2;
} else {
    $menor = $num3;
}

if ($num1 != $maior && $num1 != $menor) {
    $meio = $num1;
} elseif ($num2 != $maior && $num2 != $menor) {
    $meio = $num2;
} else {
    $meio = $num3;
}


echo "$maior, $meio, $menor";
?>