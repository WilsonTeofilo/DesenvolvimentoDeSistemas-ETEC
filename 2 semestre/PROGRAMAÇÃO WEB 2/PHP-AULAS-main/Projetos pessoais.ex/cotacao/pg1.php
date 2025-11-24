<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>




<?php 
$moedo = $_GET['moeda'];
$reais = $_GET['reais'];
$inicioCOT = date("m-d-Y",strtotime("-7 days"));
$finalCOT = date("m-d-Y");


$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\''.$moedo.'\'&@dataInicial=\''.$inicioCOT.'\'&@dataFinalCotacao=\''.$finalCOT.'\'&$top=1&$format=json&$select=cotacaoCompra,dataHoraCotacao';
$cotacao = json_decode(file_get_contents($url),true);

$formatação = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
$RealConvertido= $reais/$cotacao["value"] [0]["cotacaoCompra"];
?>

<!-- volta do html:-->


<form action="index.html">
      <h1> CONVERSOR REAL</h1>
    <label for=""> Valor em R$:</label>
    <input type="text" name="convertido" value="<?php echo numfmt_format_currency($formatação,$reais,"BRL");?>
    "id="convertidoID" readonly>
    
    
    <select name="" id="">
      <option value="USD"<?php if ($moedo=="USD") echo "selected"; ?> >>  Dólar </option>
      <option value="CAD" <?php if ($moedo=="CAD") echo "selected"; ?> >>Dólar Canadense</option>
      <option value="EUR" <?php if ($moedo=="EUR") echo "selected";?> >>  Euro</option>
      <option value="JPY"<?php if ($moedo == "JPY") ECHO "selected"; ?> >> Iene Japonês</option>
    
    </select>
    <input type="text" name="convertido" value="<?php echo numfmt_format_currency($formatação,$RealConvertido,$moedo);?>
    "id="convertidoID" readonly >
    
<button type="submit">Converter outro valor</button>
</form>


</body>
</html>