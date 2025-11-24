<?php 

if ($_SERVER ['REQUEST_METHOD'] == 'get'){
$PrimeiroNome = $_post ['PrimeiroNome'];
$Sobrenome = $_post ['Sobrenome'];
$EscolhaPets = $_post ['pets'];


echo ($PrimeiroNome. "-".$Sobrenome.$EscolhaPets);

}
?>
