<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona 04</title>
</head>
<body>
     <?php 
//         1. Cálculo de imposto com desconto 
// Desafio: 
// Crie um programa que calcule o valor final de uma compra considerando um 
// desconto e imposto. Se o valor da compra for maior que R$500,00, 
// um desconto de 10% será aplicado. O imposto de 8% será calculado sobre o 
// valor original da compra, antes de aplicar o desconto. 
// A fórmula será a seguinte: 
// fórmula
// Valor Final = (Valor Original - (Valor Original x 10%)) + (Valor Original x 8%)


function calcularValorFinal(float $valorOriginal): array
{
    if ($valorOriginal < 0) {
        throw new InvalidArgumentException("O valor da compra não pode ser negativo.");
    }

    $desconto = ($valorOriginal > 500.00) ? $valorOriginal * 0.10 : 0.00;
    $imposto  = $valorOriginal * 0.08;

    $valorFinal = ($valorOriginal - $desconto) + $imposto;

    return [
        'valorOriginal' => $valorOriginal,
        'desconto'      => $desconto,
        'imposto'       => $imposto,
        'valorFinal'    => $valorFinal,
    ];
}


//    While 
// 1.	Contagem de Estoque 
// Desafio: Implemente um programa que simule a venda de um produto. 
// O estoque começa com 100 unidades. Cada vez que um produto for vendido,
//  o estoque deve ser decrementado e o programa deve imprimir quantas unidades restam. 
//  O programa deve continuar até que o estoque seja zerado. 

$estoque = 100;

while($estoque > 0){
    $estoque --;

    echo "Produto vendido! estoque restante $estoque unidades.<br>";
}


// Do While 
// 1.	Sistema de Tentativas de Login 
// Desafio: Implemente um sistema de login que permita ao usuário tentar inserir a 
// senha até acertar ou até alcançar o número máximo de tentativas. O sistema deve 
// pedir uma nova senha até que o usuário insira a senha correta ou ultrapasse o limite 
// de 3 tentativas

$senhaCorreta = "1234";
$tentativas = 0;
$maxTentativas = 3;

do {
    $senhaDigitada = readline("Digite a senha: ");
    $tentativas++;

    if ($senhaDigitada === $senhaCorreta) {
        echo "Login realizado com sucesso!\n";
        break;
    } else {
        echo "Senha incorreta. Tentativa $tentativas de $maxTentativas.\n";
    }

} while ($tentativas < $maxTentativas);


if ($tentativas >= $maxTentativas && $senhaDigitada !== $senhaCorreta) {
    echo "Número máximo de tentativas atingido. Acesso bloqueado.\n";
}

?>

</body>
</html>