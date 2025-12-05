<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=pph, initial-scale=1.0">
    <title>Maratona 02</title>
</head>
<h1>Maratona 02 de PHP</h1>
<body>
    <?php 
    $nome1 = "Gustavo Antonio";
    $nome2 = "Luis Ricardo De Santana";
    echo "Nome dos participantes da maratona 02:";
    echo "<br>";
    echo "Nome: $nome1";
    echo "<br>";
    echo "Nome: $nome2";
    echo "<br> <br>";
    echo    "Exercícios com if e else:";
echo "<br><br>";
     echo "1. Faça um programa que verifique se um número é positivo ou negativo:";
    /* O programa deve receber um número do usuário e, em seguida, imprimir se o
     número é positivo ou negativo. Se o número for igual a zero, deve imprimir "O
     número é zero"*/
     echo "<br>";
    $numero = -1;
    if ($numero > 0) {
        echo "O número $numero é Positivo.";
    } else if ($numero < 0) {
        echo "O número $numero é negativo.";
    } else {
        echo "O numero zero nem positivo nem negativo.";
    }
    echo "<br><br>";

    echo "2. Atividade classificação de nota de um aluno:";
    /* O programa deve a nota de um estudante (de 0 a 10) e, com base nessa nota,
     classificar o desenpenho do estudante.*/
    echo "<br>";
    
    $notaaluno = 5;
    if($notaaluno >= 10){
        echo"Voce foi aprovado com distinção.";
     }   elseif($notaaluno >= 0 && $notaaluno <= 4.9){
        echo "Você esta reprovado. E sua nota é $notaaluno.";
    }else if($notaaluno >= 5 && $notaaluno <= 6.9){
        echo "Você esta em recuperação. E sua nota é $notaaluno.";
    }else if($notaaluno >= 7 && $notaaluno <= 8.9){
        echo " Você foi aprovado. E sua nota é $notaaluno.";
    }else if ($notaaluno >= 9 && $notaaluno <= 10){
        echo "Aprovado. E sua nota é $notaaluno.";
    }
    echo "<br><br>";

 
    echo "3. Faça um programa que verifique se uma pessoa pode votar por conta da idade: ";
    echo "<br>";
     /*O programa deve receber a idade de uma pessoa e verificar se ela pode votar ou
     não. A idade mínima para votar é 16 anos. Se a pessoa tiver entre 16 e 17 anos,
     pode votar, mas não é obrigatório. Para pessoas acima de 18 anos, o voto é
     obrigatório*/
 
    $idade = 16;
    if ($idade >= 18) {
        echo "Idade maior  $idade o voto é obrigatório.";
    } else if ($idade < 16) {
        echo "Idade menor $idade não pode votar; Pois a idade mínima é 16 anos! ";
    } else {
        echo "Idade entre 16 e 17 anos pode votar. Mas não é obrigatório.";
    }
    echo "<br><br>";
     echo "4.Faça um programa que verifique se um numero é par ou impar: ";
     /*O programa deve receber um número inteiro e verificar se ele é par ou impar. 
     Se o número for par, o programa deve imprimir "O numero é par". caso contrario,
     deve imprimir "O numero é impar".*/
     echo "<br>";
     $numero = 15;
     if ($numero % 2 == 0){
        echo "O número $numero é par.";
     } else {
        echo "O numero $numero é impar.";
     }
     echo"<br><br>";
 
    echo" 5. Faça um programa que calcule o preço de um ingresso de cinema baseado no
     horário:";
      /*O programa deve receber o horário de uma sessão de cinema (em formato de 24
     horas) e aplicar a seguinte lógica:
     Se o horário for entre 10:00 e 12:00: "Preço do ingresso: R$ 10,00" (matinal)
     Se o horário for entre 12:01 e 17:00: "Preço do ingresso: R$ 20,00" (diurno)
     Se o horário for entre 17:01 e 22:00: "Preço do ingresso: R$ 30,00" (noturno)*/
 echo "<br>";
$hora = 22;    
$minuto = 15;  
if ($hora>=10 && $hora <12) {
    echo "Preço do ingresso: R$ 10,00 (matinal).";
}
elseif ($hora == 12 && $minuto == 0) {
    echo "Preço do ingresso: R$ 10,00 (matinal).";
}
 elseif (
    ($hora == 12 && $minuto> 0)||
    ($hora >12 && $hora <17)||
    ($hora == 17 && $minuto == 0)
 ){
    echo "Preço do ingresso: R$ 20,00 (diurno).";
 }
 elseif (
    ($hora == 17 && $minuto > 0)||
    ($hora > 17 && $hora <= 22)
 ){
    echo "Preço do ingresso: R$ 30,00 (noturno).";
 }
   else {
    echo "Horario fora de funcionamento.";
 }
 
 echo "<br><br>";

  echo "Exercicios com switch:";

  echo "<br><br>";
 echo "1. Faça um programa que determine o dia da semana com base em um numero de 1 a 7:";
 /*O programa deve receber um número de 1 a 7, representando um dia da semana, 
 e imprimir o nome do dia correspondente(por exeplo, 1= "Domingo", "2= Segunda-feira", etc)*/ 
 echo "<br>";
$dia = 5;
switch ($dia){
    case 1:
        echo "Domingo";
        break;
        case 2:
            echo "Segunda-feira";
            break;
            case 3:"Terça-feira";
            break;
            case 4:
                echo"Quarta-feira";
                break;
                case 5:
                    echo "Quinta-feira";
                    break;
                    case 6;
                   echo "Sexta-feira";
                   break;
                   case 7:
                    echo "Sábado";
                    break;
                    default:
                    echo "Número invalido, por favor insira um número de 1 a 7.";
                   }
                    echo"<br> <br>";
    echo"2. Faça um programa que exiba a categoria de um estudante de acordo com sua
     nota:";
       /*O programa deve receber a nota de um estudante e, com base no valor, exibir a
     categoria correspondente:
     o 0 a 4.9: "Reprovado"
     o 5 a 6.9: "Recuperação"
     o 7 a 10: "Aprovado" */
 echo "<br>";

    $nota = 10;
    switch (true) {
    case ($nota < 5):            
        echo "Reprovado.";
        break;

    case ($nota >= 5 && $nota < 7):
        echo "Recuperação.";
        break;

    case ($nota >= 7 && $nota <= 10): 
        echo "Aprovado.";
        break;
    default:
        echo "Categoria não correspondente.";
        break;
}
    echo "<br><br>";
    
  echo" 3.Faça um programa que calcule o preço final de um produto com base em um codigo de desconto:";
    /* O programa deve receber um código de desconto (de 1 a 3) e aplicar o desconto correspondente
    ao preço do produto.
    . Código 1: 10% de desconto.
    . Código 2: 20% de desconto.
    . Código 3: 30% de desconto.
    . Se o código for invalido, deve mostrar uma mensagem de erro.*/ 
        echo "<br>";
        $precoProduto = 100;
        $codigoDesconto = 3;
    
        switch ($codigoDesconto){
            case 1:
                $codigoDesconto = 0.10;
                echo "Desconto de 10% aplicado.De $precoProduto por R$" . ($precoProduto - ($precoProduto * $codigoDesconto));
                break;
                case 2:
                    $codigoDesconto = 0.20;
                    echo "Desconto de 20% aplicado. De $precoProduto por R$" . ($precoProduto - ($precoProduto * $codigoDesconto));
                    break;
                    case 3:
                        $codigoDesconto = 0.30;
                        echo "Desconto de 30% aplicado. De $precoProduto por R$" . ($precoProduto - ($precoProduto * $codigoDesconto));
                        break;
                        default:
                        echo "Código de desconto invalido. Preço final é R$ $precoProduto.";
 }
echo"<br> <br>";

echo" Exercícios com arrays:";

 echo "<br><br>";
    echo " 1. Faça um programa que crie um array com os nomes de 5 amigos:";
     /*O programa deve permitir que o usuário adicione 5 nomes ao array e, em seguida,
     imprimir todos os nomes.*/
 
     echo "<br>";
    
     $nome = ["Louis", "Richard", "Melissa", "Maria", "Eduarda"];
     echo"Nome dos amigos: ";
     print_r($nome);
 
     echo "<br><br>";
 
 echo" 2. Faça um programa que remova o primeiro elemento de um array e imprima o array resultante:";
/*O programa deve criar um array com 5 elementos e remover o primeiro elemento do array. Após 
isso, o programa deve imprimir o array atualizado.*/
 echo "<br>";    
 $array =[10, 15, 20, 25, 30];
        unset($array[0]);
        print_r($array);

        echo"<br> <br>";
  echo "3. Faça um programa que conte quantos números pares existem em um array:";
    /* O programa deve criar um array com 10 números aleatórios e contar quantos
     números pares estão presentes no array. O resultado deve ser impresso na tela.*/
 
     echo "<br>";
     $num= [10, 22, 35, 47, 50, 63, 21, 12, 66, 91];
    $contagem = 0;
    $listaPares = [];
     echo"Números pares: ";
     print_r($num);
     echo "<br><br>";

        echo "4.Faça um programa que combine dois array:";
        /*O programa deve criar dois arrays, um contendo os números 1 a 5 e o outro 
        contendo os nomeros de 6 a 10. O programa deve juntar os dois arrays e imprimir o array final.*/ 
        
        echo "<br>";
        $array1 = [1, 2, 3, 4, 5];
        $array2 = [6, 7, 8, 9, 10];
        $arrayCombinado = array_merge($array1, $array2);
        print_r($arrayCombinado);
    ?>
</body>
</html>