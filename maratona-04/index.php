<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona 04</title>
</head>
<body>
 
    <?php
        /*Operadores Lógicos
 
1. Sistema de Autenticação de Funcionários
Desafio: Você foi solicitado a desenvolver um sistema de autenticação para a
empresa. O acesso ao sistema é permitido apenas se o funcionário tiver
permissão e o cadastro estiver ativo ou se o funcionário for um administrador.
Implemente essa lógica com operadores lógicos.*/

    $id = 2;
    $funcionario = "Gustavo Antonio";
    $eAdministrador = true;

    echo ($id == 2 and $eAdministrador) ? " Seja bem vindo $funcionario" : "Id não encontrado. Por favor passar na recepção!";
    echo"<br>";

    $cadastroAtivo = false;
    $eAdministrador = false;
    $temPermissao = false;

    if ($cadastroAtivo && $temPermissao == true )
    {
        echo "Cadastro Ativo, Passe Autorizado. <br>";
    } 
    else if ($cadastroAtivo && $temPermissao == false || $eAdministrador == true)
    {
    echo "Administrador Autorizado";
    echo "<br>";
    }
    else if ($cadastroAtivo && $temPermissao == false || $eAdministrador == false )
    {
        echo "Usuario não encontrado <br><br>";
    }

 /*Cálculo matemático com ordem de grandeza
 
1. Cálculo de imposto com desconto
Desafio:
Crie um programa que calcule o valor final de uma compra considerando um
desconto e imposto. Se o valor da compra for maior que R$500,00, um desconto
de 10% será aplicado. O imposto de 8% será calculado sobre o valor original da
compra, antes de aplicar o desconto.
A fórmula será a seguinte:
 
Valor Final = (Valor Original -(Valor Original x 10%)) + (Valor Original x 8%)*/
echo "<br><br>";
$valorCompra = 500.00;
$desconto = 0.10;
$imposto = 0.08;

echo "Valor da compra: $valorCompra <br>";
$valorImposto = $valorCompra * $imposto;
echo "Valor do desconto: R$ ".($valorCompra * $desconto)."<br>";

if($valorCompra >= 500){
        $valorDesconto = $valorCompra * $desconto;
        $valorFinal = ($valorCompra - $valorDesconto) + $valorImposto;
    }
    else {
      $valorFinal = $valorCompra + $valorImposto;
      echo "Sem desconto aplicado <br>";
    }
echo "Imposto (8%): R$ $valorImposto   <br>";
echo "<strong> Valor final:$valorFinal </strong><br><br>";

 
 
 
/*2. Cálculo de Preço com Taxa de Entrega
 
Desafio:
Crie um sistema para calcular o valor final de uma compra, considerando uma
taxa de entrega de 15% sobre o valor da compra. Se o valor da compra for superior
a R$1000,00, um desconto de 20% será aplicado após calcular a taxa de entrega.
A fórmula será: */
echo "<br><br>";
$valorCompra = 1200;


$taxaEntrega = $valorCompra * 0.15;


$subtotal = $valorCompra + $taxaEntrega;


if ($valorCompra > 1000) {
    $desconto = $subtotal * 0.20;
    $valorFinal = $subtotal - $desconto;
} else {
    $valorFinal = $subtotal;
}


echo "Valor da compra: R$ " . number_format($valorCompra, 2, ',', '.') . "<br>";
echo "Taxa de entrega: R$ " . number_format($taxaEntrega, 2, ',', '.') . "<br>";
echo "Valor final: R$ " . number_format($valorFinal, 2, ',', '.');
 
/*While
 
1. Contagem de Estoque
 
Desafio: Implemente um programa que simule a venda de um produto. O estoque
começa com 100 unidades. Cada vez que um produto for vendido, o estoque deve
ser decrementado e o programa deve imprimir quantas unidades restam. O
programa deve continuar até que o estoque seja zerado.*/
echo"<br><br>";   
$estoque = 100;
 
 
 
    while ($estoque > 0) {
    echo "<br>";
    echo "venda realizada Estoque restante $estoque <br>";
    $estoque--;
    }
    echo"<br>";
    echo"Estoque zerado";
 
/*2. Verificação de Cliente
 
Desafio: Crie um sistema de login onde o usuário tem até 3 tentativas para inserir
a senha correta. Se ele acertar a senha, o sistema deve exibir "Acesso concedido".
Caso contrário, após 3 tentativas, o sistema deve exibir "Acesso negado".
Implemente essa lógica com um loop while e uma verificação para o número de
tentativas. */
 echo"<br><br><br>";
$senhaCorreta = "1234";
$tentativas = 0;
$senhaDigitada = "";

while ($tentativas < 3) {

    
    $senhaDigitada = "1234"; 

    if ($senhaDigitada === $senhaCorreta) {
        echo "Acesso concedido";
        break;
    } else {
        $tentativas++;
        echo "Senha incorreta. Tentativa " . $tentativas . "<br>";
    }
}


if ($tentativas == 3 && $senhaDigitada !== $senhaCorreta) {
    echo "Acesso negado";
}
 
/*Do While
 
1. Sistema de Tentativas de Login
Desafio: Implemente um sistema de login que permita ao usuário tentar inserir a
senha até acertar ou até alcançar o número máximo de tentativas. O sistema deve
pedir uma nova senha até que o usuário insira a senha correta ou ultrapasse o
limite de 3 tentativas. */
 echo "<br><br>";
 $senhaCorreta = "1234";
$tentativas = 0;
$maxTentativas = 1;
 
while ($tentativas < $maxTentativas) {
 
    
    $senhaDigitada = readline("Digite a senha: ");
 
    if ($senhaDigitada === $senhaCorreta) {
        echo "Login realizado com sucesso!\n";
        break;
    } else {
        $tentativas++;
        echo "Senha incorreta. Tentativas restantes: " . ($maxTentativas - $tentativas) . "\n";
    }
}
 
if ($tentativas == $maxTentativas) {
    echo "Número máximo de tentativas atingido. Acesso bloqueado.\n";
}
 
/*2. Processamento de Pedidos de Compra
 
 
Desafio: Crie um sistema que simule o processamento de pedidos de compra em
uma loja online. O programa deve processar um número determinado de pedidos
e, para cada um, imprimir "Processando pedido X". O sistema deve continuar até
que todos os pedidos sejam processados, sendo o número de pedidos fornecido
pelo usuário.*/
   
 echo "<br><br>";

$numeroPedidos = 5;
$contador = 1;

while ($contador <= $numeroPedidos) {
    echo "Processando pedido $contador<br>";
    $contador++;
}

    ?>
 
</body>
</html>