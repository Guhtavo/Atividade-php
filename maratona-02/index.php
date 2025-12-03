<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=pph, initial-scale=1.0">
    <title>Maratona 02</title>
</head>
<body>
    <?php 
    echo "2. Atividade classificação de nota de um aluno";
    echo "<br>";
    
    $notaaluno = 9;
    if($notaaluno >= 10){
        echo"Voce foi aprovado com distinção.";
     }   elseif($notaaluno >= 0 && $notaaluno <= 4.9){
        echo "voce esta reprovado";
    }else if($notaaluno >= 5 && $notaaluno <= 6.9){
        echo "voce esta em recuperação.";
    }else if($notaaluno >= 7 && $notaaluno <= 8.9){
        echo " voce foi aprovado";
    }else if ($notaaluno >= 9 && $notaaluno <= 10){
        echo "Aprovado";
    }
    echo "<br>";
    echo "Atividade 4. Verificando se um numero é par ou impar.";

     /*     Exercícios com if e else:
     1. Faça um programa que verifique se um número é positivo ou negativo
     O programa deve receber um número do usuário e, em seguida, imprimir se o
     número é positivo ou negativo. Se o número for igual a zero, deve imprimir "O
     número é zero"*/
    $numero = -1;
    if ($numero > 0) {
        echo "O número $numero é Positivo";
    } else if ($numero < 0) {
        echo "O número $numero é negativo";
    } else {
        echo "O numero zero nem positivo nem negativo";
    }
    echo "<br>";
 
    /* 3. Faça um programa que verifique se uma pessoa pode votar
     O programa deve receber a idade de uma pessoa e verificar se ela pode votar ou
     não. A idade mínima para votar é 16 anos. Se a pessoa tiver entre 16 e 17 anos,
     pode votar, mas não é obrigatório. Para pessoas acima de 18 anos, o voto é
     obrigatório*/
 
    $idade = 16;
    if ($idade >= 18) {
        echo "Idade maior  $idade o voto é obrigatório";
    } else if ($idade < 16) {
        echo "Idade menor $idade não pode votar";
    } else {
        echo "Idade entre 16 e 17 anos pode votar";
    }
    echo "<br>";
 
    /* 5. Faça um programa que calcule o preço de um ingresso de cinema baseado no
     horário
     O programa deve receber o horário de uma sessão de cinema (em formato de 24
     horas) e aplicar a seguinte lógica:
     Se o horário for entre 10:00 e 12:00: "Preço do ingresso: R$ 10,00" (matinal)
     Se o horário for entre 12:01 e 17:00: "Preço do ingresso: R$ 20,00" (diurno)
     Se o horário for entre 17:01 e 22:00: "Preço do ingresso: R$ 30,00" (noturno)*/
 
$hora = 17;    
$minuto = 15;  
if($hora >= 10 && $hora <= 12){
    echo "Preço do ingresso: R$ 10,00 (matinal)";
} elseif($hora >= 12 && $hora <= 17){
    }if ($hora == 12 && $minuto == 0) {
        echo "Preço do ingresso: R$ 10,00 (matinal)";
    } else {
        echo "Preço do ingresso: R$ 20,00 (diurno)";
    } else {
        echo "Preço do ingresso: R$ 30,00 (noturno)";
    }

    echo "<br>";
 
 
    /*     2. Faça um programa que exiba a categoria de um estudante de acordo com sua
     nota
     O programa deve receber a nota de um estudante e, com base no valor, exibir a
     categoria correspondente:
     o 0 a 4.9: "Reprovado"
     o 5 a 6.9: "Recuperação"
     o 7 a 10: "Aprovado" */
 
    $nota = 10;
    switch (true) {
    case ($nota < 5):            
        echo "Reprovado";
        break;

    case ($nota >= 5 && $nota < 7):
        echo "Recuperação";
        break;

    case ($nota >= 7 && $nota < 10): 
        echo "Aprovado";
        break;
    default:
        echo "Categoria não correspondente";
        break;
}
    echo "<br>";
 
    /*        Exercícios com arrays:
     1. Faça um programa que crie um array com os nomes de 5 amigos
     O programa deve permitir que o usuário adicione 5 nomes ao array e, em seguida,
     imprimir todos os nomes.*/
 
     $nome = ["Louis", "Richard", "Melissa", "Maria", "Eduarda"];
     echo"nomes do amigos";
     print_r($nome);
 
     echo "<br>";
 
 
    /*      3. Faça um programa que conte quantos números pares existem em um array
     O programa deve criar um array com 10 números aleatórios e contar quantos
     números pares estão presentes no array. O resultado deve ser impresso na tela.*/
 
     $num= [10, 22, 35, 47, 50, 63, 21, 12, 66, 91];
    $contagem = 0;
    $listaPares = [];
     echo"Números pares";
     print_r($num)

    ?>
</body>
</html>