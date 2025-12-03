<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho de PHP</title>
 
</head>
<body>
    <?php
    echo " Atividade 1. Saudação com o nome!<br>";
    echo "<br>";
echo  "Nome: Victor Hugo De Matos Paie";
echo "<br>";
echo "Nome: Gustavo Antonio";
    echo "<br> <br>";
    echo "<h1/> Olá " . "Pessoal! Bem-vindo ao nosso site &#128527; </h1>";
    echo "<br> <br>";
    echo "Atividades de php";
    echo "<br> <br>";
      //Variavel
      echo " Conversão de temperatura<br> Atividade 2<br>";
      echo "<br>";
        $celsius = 30;
        const FATOR = 9/5;
        $fahrenheit = ($celsius * FATOR) + 32;
        
        echo "Temperatura em celsius: $celsius °c ";
          echo "<br>";
        echo "Temperatura em fahrenheit : $fahrenheit °F <br>";
          echo "<br> <br>";
          echo " Emprestimo Bancario <br> Atividade 3<br>";
 echo "<br>";
 
 $valor = 30000;
 $taxajuros = 0.0809;
 $numerosparcelas = 12;
 echo "Valor solicitado do emprestimo: R$ $valor <br>";
 echo "Numeros de parcelas: $numerosparcelas <br>";
 echo "Taxa de juros mensal: " . ( $taxajuros * 100) . "% <BR>";
 
 $valordaparcela = ($valor *(1 + $taxajuros)) / $numerosparcelas;
echo "Valor da parcela: R$ " . number_format($valordaparcela, 2, ',', ',');
echo"<br> <br>";
echo "Converso de moeda <br> Atividade 4<br>";
echo "<br>";
      //variaveis
    $quantia_reais = 100.00;
    $taxa_cambio = 5.25 ;

 //conversão
  $valor_dolares = ($quantia_reais / $taxa_cambio);
  $valor_dolares = round($valor_dolares, 2);

  //Exibição
  echo "valor em reais: R$ $quantia_reais<br>";
  echo "taxa de câmbio: R$ $taxa_cambio<br>";
  echo "Valor covertido em dólares: USR$ $valor_dolares<br>";
   echo "<br> <br>";
  

         ?>
</body>
</html>