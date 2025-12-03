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
    

    ?>
</body>
</html>