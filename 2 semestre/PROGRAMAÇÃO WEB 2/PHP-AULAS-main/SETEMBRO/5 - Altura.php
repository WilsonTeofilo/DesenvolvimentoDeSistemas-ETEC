<?php
$contador = 1;


$maiorAltura = 0;
$menorAltura = 9999;
$somaAlturasMulheres = 0;
$qtdMulheres = 0;
$idadeHomemMaisVelho = 0;
$idadeMulherMaisNova = 9999;

while ($contador <= 50) {

    $altura = rand(150, 200) / 100;   // altura entre 1.50m e 2.00m
    $idade  = rand(10, 80);           // idade entre 10 e 80 anos
    $sexo   = (rand(0, 1) == 0) ? "m" : "f"; // sorteia sexo

    echo "Pessoa $contador: Altura=$altura, Idade=$idade, Sexo=$sexo\n";


    if ($altura > $maiorAltura) {
        $maiorAltura = $altura;
    }
    if ($altura < $menorAltura) {
        $menorAltura = $altura;
    }


    if ($sexo == "f") {
        $somaAlturasMulheres += $altura;
        $qtdMulheres++;

        if ($idade < $idadeMulherMaisNova) {
            $idadeMulherMaisNova = $idade;
        }
    }

    if ($sexo == "m") {
        if ($idade > $idadeHomemMaisVelho) {
            $idadeHomemMaisVelho = $idade;
        }
    }

    $contador++;
}


if ($qtdMulheres > 0) {
    $mediaAlturaMulheres = $somaAlturasMulheres / $qtdMulheres;
} else {
    $mediaAlturaMulheres = 0;
}


echo "\n=== RESULTADOS ===\n";
echo "Maior altura: $maiorAltura m\n";
echo "Menor altura: $menorAltura m\n";
echo "Média de altura das mulheres: $mediaAlturaMulheres m\n";
echo "Idade do homem mais velho: $idadeHomemMaisVelho anos\n";
echo "Idade da mulher mais nova: $idadeMulherMaisNova anos\n";
?>