<?php 

$nome =['wilson','Salve', 'Jurema', 'Pastel Do Võ zé', 'Marçele', 'Luuqeta', 'kanubis', 
' jantar um Pastel', 'Chat gpt de souza', 'Gemini Teofilo neves'];
$sexo = ['M', 'M', 'F', 'M', 'F', 'M', 'F', 'M', 'M', 'F'];
$idades = [23,22,21,15,18,16,15,14,18,22,];
$cidade = ['São paulo', 'Santos', 'Osasco', 'São caetano do sul', 'Ribeirão Preto','São paulo', 'Santos', 'Osasco', 'São caetano do sul', 'Ribeirão Preto',];
$sexos = 0;


    echo "idade e nome de todos usuários cadastrados: <br>";

for ($cont = 0; $cont<10; $cont++){
echo "Nome: ". $nome[$cont]. ", ".  $idades[$cont]. " anos"."<br> -" ;
}



for ($conta = 0 ; $conta<count ($idades); $conta++){
if ($idades [$conta] >18){
    echo "🔞". $nome[$conta]. " é maior de idade, tem: " . $idades[$conta]. " anos de idade <br>" ;
 }
}

for ($contagemsexo = 0; $contagemsexo <count ($sexo); $contagemsexo++){
    if ($sexo[$contagemsexo] =='M'){
        $sexos +=1;
        
    }
}

for ($contar =0; $contar <count ($cidade); $contar++){
    if ($cidade[$contar] == "Santos"){
        echo " <br>  🐋 Vive em santos :<br>". $nome[$contar];
    }
}





echo "<br> ♂️ total de pessoas do Sexo Masculino: ". $sexos;

?>
