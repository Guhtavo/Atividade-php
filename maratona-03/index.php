<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Maratona 03 de PHP</h1>";
    echo "<br><br>";
    $nome1 = "Gustavo Antonio";
    $nome2 = "José Paulo Costa de Oliveira";
    echo "Nome:$nome1<br>Nome:$nome2<br>";
    echo "<br>Exercício 1.  Laço FOR:<br><br>";
echo"Crie um programa que imprime 8 da tabuada de multiplicação do números 8 vezes 1
até o 10: exemplo 8x1 = 8<br> 8x2= 16.<br><br>"; 

       for ($i =1; $i <= 10;  $i++){
        $t = 8;
        $resultados = $t * $i;
        echo "$t x $i = $resultados <br>";
       }

       echo "<br>Exercício 2.<br>Crie um programa que receba 10 números inteiros e calcule a média desses
 números. Utilize o laço for para ler os números e calcular a média.<br>";
$numerosInteiros =[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$media = 0;
$soma = 0;
for ($i = 0; $i < count($numerosInteiros); $i++){
    $soma += $numerosInteiros[$i];
} 
$media = $soma / count($numerosInteiros);
echo "Média dos números: $media<br>";
echo" Soma: $soma<br>";
echo"Média: $media<br><br>";
echo"Exercício 3. Com foreach:<br>";
echo "Crie um programa que tenha um array com nomes de 10 peças de carro e imprima todos os nomes em uma lista.<br><br>";

$lista =["porta","capo","parachoque","retrovisor","pneus","vidro","motor","cambio","banco","volante"];
foreach($lista as $pecas){
   // echo "peças de carro : $pecas . <br>";
}
echo "Array associativo junto:";
$pecasCarro = [
    "porta" => "Peça usada para abrir e fechar o carro",
    "capo" => "Peça que cobre o motor do carro",
    "parachoque" => "Peça que protege o carro em colisões",
    "retrovisor" => "Peça que permite ver o que está atrás do carro",
    "pneus" => "Peça que permite o movimento do carro",
    "vidro" => "Peça que protege os ocupantes do carro do vento e da chuva",
    "motor" => "Peça que gera a potência para o movimento do carro",
    "cambio" => "Peça que permite mudar as marchas do carro",
    "banco" => "Peça que permite sentar no carro",
    "volante" => "Peça que permite controlar o carro"
];
foreach($pecasCarro as $pecas => $descricao){
    echo "<br> Peças: $pecas - Descrição: $descricao . <br>";
}

echo "<br><br>Exercicio 4.<br> Crie um programa que tenha um array associativo com dados 
de um gato que chegou no petshop, como chave e seu valor. Utilize o foreach para o nome e os dados do gato.<br>";
$animal = [
    "nome" => "Tom",
    "idade" => 3,
    "raca" => "Siamês",
    "cor" => "Cinza e preto",
    "peso" => "2,5 kg",
    "animal" => "Gato",
];
foreach($animal as $nome => $dados){
    echo "<br> $nome : $dados . <br>";
}
echo "<br><br>Exercicio com funções 5.<br> Crie uma função que receba o valor de uma compra e calcule o desconto de
15$. A função deve retornar o valor com o desconto aplicado. <br><br>";
function calcularDesconto($valorCompra){
    $desconto = 15;
    $valorCompraComDesconto = $valorCompra - $desconto;
    return $valorCompraComDesconto;
}
echo "Valor da compra com desconto: R$" . calcularDesconto(100);
echo "<br><br>";
echo "Exercício 6.<br>Crie uma função que receba um número e verifique se ele é primo ou não.<br>";
function eprimo($numeros){
    if ($numeros < 2){
        return false;
    
}
for ($i =2; $i < $numeros; $i++){
    if ($numeros % $i ==0){
        return false;
}
}
return true;
}
$numero = 29;
if (eprimo($numero)){
    echo "<br> O número $numero é primo.";
} else {
    echo "<br> O número $numero não é primo.";
}
?>

    
</body>
</html>